<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class LoginController extends Controller
{
    public function verify(Request $req)
    {
        
        $user = User::where('username', $req->username)
        ->where('password', $req->password)
        ->first();
        
        
        if($user->type == 1){
            $req->session()->put('name', $user->name);
            $req->session()->put('id', $user->id);
            return redirect('/admin/home');
        }
        if($user->type == 2){
            return redirect('/manager/home');
        } 
        else{
            $req->session()->flash('msg', 'invalid username or password');
            return redirect('/login');
            }
        //$req->session()->put('name', $req->input('username'));
        $req->session()->put('name', $user->name);
        $req->session()->put('id', $user[0]->id);
    }
}
