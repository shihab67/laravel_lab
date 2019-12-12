<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;

class UserController extends Controller
{
    public function profile()
    {
        $data  = User::all()->where('id', session('id'))->first();
        //return $data;
        return view('admin.profile')->with('title',"Admin Profile")->with('data', $data);
    }
    public function settings()
    {
        $data  = User::all()->where('id', session('id'))->first();
        //return $data;
        return view('admin.settings')->with('title',"Settings")->with('data', $data);
    }
    public function update_profile(Request $request)
    {
        $data  = User::all()->where('id', session('id'))->first();
        //return $data;
        $data->name =  $request->get('name');
		$data->contact =  $request->get('contact');
		$data->password =  $request->get('password');
        $data->save();
        return redirect('/admin/profile');
    }
}
