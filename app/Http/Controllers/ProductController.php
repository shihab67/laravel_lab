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
        $file = $request->file('file');
        $filename = uniqid().$file->getClientOriginalName();
        $file->move('images',$filename);

        $product = Product::create([
            'product' => $request->gender,
            'category' => $request->product,
            'desc' => $request->desc,
            'image' => 'images/'.$filename,
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

    public function edit_product($id)
    {
        $product = Product::find($id);
        //return $product;
        return view('admin.edit_product')->with("title","Edit Product")->with("data", $product);
    }

    public function update_product($id, Request $request)
    {
        $product = Product::find($id);
        $product->desc = $request->name;
        $product->save();
        //return $product;
        return redirect('/admin/productlist');
    }

    public function delete_product($id)
    {
        $product = Product::find($id);
        //return $product;
        return view('admin.delete_product')->with("title","delete Product")->with("data", $product);
    }

    public function destroy_product($id)
    {
        $product = Product::find($id);
        $product->delete();
        //return $product;
        return redirect('/admin/productlist');
    }

    public function list_user()
    {
        $product = Product::all();
        return view('user.product_list')->with("data", $product);
    }

}
