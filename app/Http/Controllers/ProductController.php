<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
   public function index()
   {
       return view('Admin.index');
   }
   public function addProduct()
   {
       return view('Admin.addProduct');
   }
   public function storeProduct()
   {
       return view('Admin.addProduct');
   }
   public function details(Product $product)
   {
      // dd($product);
       return view('Admin.details',compact('product'));
   }
   public function edit(Product $product)
   {
      // dd($product);
       return view('Admin.edit',compact('product'));
   }
   public function update(Product $product, Request $request)
        {

        if($request->photo){
            $photo = $request->file('photo');
            $fileName = $photo->getClientOriginalName();
            $request->photo->storeAs('Products',$fileName,'public');
            $request->photo = $fileName;
        }
       // dd($request->photo);
            $product->update([
                'title' => $request->title,
                'price' => $request->price,
                'photo' => $fileName,
                'description' => $request->description,
            ]);
            return redirect()->route('products')->with('message','Product Updated Successfully!');
   }
}
