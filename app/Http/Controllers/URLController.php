<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\URL;

class URLController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function listView()
    {
        return view('partials.list');
    }

    public function formView()
    {
        return view('partials.form');
    }

    public function index()
    {
        $urls = URL::where('user_id', Auth::id())->get();
        return response()->json($urls);
    }

    
    public function store(Request $request)
    {
        $this->validate($request, [
            'full' => 'required|url',
            'description' => 'required|string|max:255',
        ], [
            'full.required' => 'O URL é obrigatório!',
            'full.url' => 'O URL inserido não é válido!',
            'description.required' => 'A descrição é obrigatória!'
        ]);

        $url = new URL([
            'full' => $request->input('full'),
            'description' => $request->input('description')
        ]);       

        $generated = false;

        do {
            $short_candidate = str_random(6);
            if(URL::where('short', '=', $short_candidate)->count() == 0){
                $url->short = $short_candidate;
                $generated = true;
            }
        } while (!$generated);

        $url->user_id = Auth::id();

        $url->save();

        return redirect('/view/url/'.$url->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(URL $url)
    {
        if (Gate::denies('show-url', $url)) {
             return redirect('/view/url')->with('status', 'You cannot see that URL!');    
        }

        return view('partials.show', compact('url'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(URL $url)
    {
        if (Gate::denies('remove-url', $url)) {
            return response()->json(['success' => false]);   
        }
        
        $url->delete();

        return response()->json(['success' => true]);
    }
}
