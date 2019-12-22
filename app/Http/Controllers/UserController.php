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
    public function approve_list()
    {
        $data  = User::all()->where('status', 0);
        return view('admin.approvals')->with('title',"Approve Users")->with('data', $data);
    }
    public function approve_page($id)
    {
        $user = User::find($id);
		return view('admin.approve_page')->with('title',"Approve User")->with('data',$user);
    }
    public function approve($id,Request $request)
    {
        $user = User::find($id);
        $user->status = 1;
        $user->save();
        $message='User' ."".$request->name."". 'Has Been Activated!!';
		return redirect('/admin/approvals')->with('message',$message);
    }
    public function customers()
    {
        $data  = User::all()->where('type', 1)->where('status', 1);
		return view('admin.customers')->with('title',"Customer List")->with('data',$data);
    }
    public function delete($id)
    {
        $user = User::find($id);
		return view('admin.customers_delete')->with('title',"Delete Customer")->with('data',$user);
    }
    public function destroy_customer($id,Request $request)
    {
        $user = User::find($id);
        $user->delete();
        $message='User' ."".$request->name."". 'Has Been Deleted!!';
		return redirect('/admin/customers')->with('message',$message);
    }

    public function profile_user()
    {
        $data  = User::all()->where('id', session('id'))->first();
        //return $data;
        return view('user.profile')->with('data', $data);
    }
}
