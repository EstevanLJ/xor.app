<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
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

        return response()->json(['msg' => 'ok']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(URL $url)
    {
        if($url->user_id != Auth::id()){
            return redirect('/url');    
        }

        return response()->json($url);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(URL $url)
    {
        if($url->user_id != Auth::id()){
            return redirect('/url');    
        }
        
        $url->delete();

        return response()->json(['msg' => 'ok']);
    }
}
