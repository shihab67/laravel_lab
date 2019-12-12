<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.addproduct')->with("title","Add Product");
    }
    public function insert(Request $request)
    {
        $this->validate($request,[
            'gender' => 'required',
            'product' => 'required',
            'desc' => 'required',
            'file' => 'required',
        ]);
        return $request->all();
        return view('admin.addproduct')->with("title","Add Product");
    }
}
