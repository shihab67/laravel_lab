<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegisterController extends Controller
{
    public function create(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|max:255',
            'username' => 'required|unique:users|max:255',
            'contact' => 'required',
            'password' => 'required|confirmed|max:255',
        ]);
        User::create($request->all());
        return redirect('/login')->with("message", "Your Account Has Created Successfuly,Now Wait For The Admin To Approve!");
    }
}
