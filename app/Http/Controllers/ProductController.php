<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Size;
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
        //return $request->all();
        $product = Product::create([
            'product' => $request->gender,
            'category' => $request->product,
            'desc' => $request->desc,
            'image' => $request->file,
        ]);
        Size::create([
            'product_id'=> $product->id,
            'small' => $request->small,
            'medium' => $request->medium,
            'large' => $request->large,
            'xl' => $request->xl,
            'xxl' => $request->xxl,
        ]);

        return view('admin.addproduct')->with("title","Add Product");
    }

    public function list()
    {
        $product = Product::all();
        return view('admin.product_list')->with("title","Product List")->with("data", $product);
    }
}
