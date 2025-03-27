<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductsModel;

class ProductsController extends Controller
{
    public function index()
    {
        $products=ProductsModel::get();
        return view('Products.index',compact('products'));
    }

    public function create()
    {
        return view('Products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'desc'=>'required',
            'image'=>'required|mimes:jpg,jpeg,png,gif|max:10000'
        ]);
        $filename=time().'.'.$request->image->extension();
        $request->image->move(public_path('Products'),$filename);

        $product=new productsModel;
        $product->name=$request->name;
        $product->description=$request->desc;
        $product->image=$filename;
        $product->save();
        return back()->withSuccess('Product Created !!!!!');
        
        
    }

    public function edit($id)
    {
        $product=ProductsModel::where('id',$id)->first();
        return view('Products.edit',['product'=>$product]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'desc'=>'required',
            'image'=>'nullable|mimes:jpg,jpeg,png,gif|max:10000'
        ]);
        $product=ProductsModel::where('id',$id)->first();
        if(isset($request->image))
        {
            $filename=time().'.'.$request->image->extension();
            $request->image->move(public_path('Products'),$filename);
            $product->image=$filename;
        }
        $product->name=$request->name;
        $product->description=$request->desc;
        
        $product->save();
        return back()->withSuccess('Product Updated !!!!!');
    }

    public function delete($id)
    {
        $product=ProductsModel::where('id',$id)->first();
        $product->delete();
        return back()->withSuccess('Product Deleted !!!!!');
    }


}
