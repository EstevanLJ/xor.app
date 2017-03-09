<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function edit()
    {
        $user = Auth::user();
        return view('partials.userEdit', compact('user'));
    }

    public function update(User $user, Request $request)
    {
        if (Gate::denies('edit-user', $user)) {
            return response()->json(['success' => false]);   
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);
        
        $old_user = Auth::user();

        if($request->input('password') != ''){
            if($request->input('password') == $request->input('confirm')){
                $old_user->password = Hash::make($request->input('password'));
            } else {
                $validator->errors()->add('password', 'The passwords don\'t match!');
                return redirect('/view/user')
                        ->withErrors($validator)
                        ->withInput();
            }
        }

        if($validator->fails()){
            return redirect('/view/user')
                        ->withErrors($validator)
                        ->withInput();
        }


        $old_user->name = $request->input('name');
        $old_user->save();

        return redirect('/view/user');
    }
}
