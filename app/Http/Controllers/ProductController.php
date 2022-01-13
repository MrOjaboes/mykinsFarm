<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
   public function index()
   {
       return view('Admin.Products.index');
   }
   public function addProduct()
   {
       return view('Admin.Products.addProduct');
   }

   public function details(Product $product)
   {
      // dd($product);
       return view('Admin.Products.details',compact('product'));
   }
   public function edit(Product $product)
   {
      // dd($product);
       return view('Admin.Products.edit',compact('product'));
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
