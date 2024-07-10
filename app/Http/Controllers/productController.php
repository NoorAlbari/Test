<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;

class productController extends Controller
{
    public function index(){
        $products = Product::all();
        return view ('products.index',['products'=>$products]);

    }
    public function create(){
        return view ('products.create');
    }
    public function store(Request $request){
        #dd($request);
        $data = $request->validate([
            'name'=>'required',
            'quantity'=>'required|numeric',
            'description'=>'nullable',
            'price'=>'required|decimal:0,2',
        ]);

        $newProduct = Product::create($data);

        return redirect(route('product.index'));
    }
    public function edit(product $product){
        #dd($product);
        return view ('products.edit',['product'=>$product]);
    }
    public function update(product $product,Request $request){
        $data = $request->validate([
            'name'=>'required',
            'quantity'=>'required|numeric',
            'description'=>'nullable',
            'price'=>'required|decimal:0,2',
        ]);

        $product->update($data);

        return redirect(route('product.index'))->with('success','Product Update Succesfully');
    }
    public function delete(product $product){
        $product ->delete();
        return redirect(route('product.index'))->with('success','Product Deleted Succesfully');

    }
}
