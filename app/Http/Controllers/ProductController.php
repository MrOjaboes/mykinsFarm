<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('product_details');
    }
   public function index()
   {
       return view('Admin.Products.index');
   }
   public function addProduct()
   {
       return view('Admin.Products.addProduct');
   }
public function product_details(Product $product)
{
    //dd($product);
    return view('product_details',compact('product'));

}

   public function details(Product $product)
   {
      // dd($product);
       return view('Admin.Products.details',compact('product'));
   }
   public function edit(Product $product)
   {
      // dd($product);
      $categories = Category::all();
       return view('Admin.Products.edit',compact('product','categories'));
   }
   public function update(Product $product, Request $request)
        {

        if($request->photo){
            $photo = $request->file('photo');
            $fileName = $photo->getClientOriginalName();
            $request->photo->storeAs('Products',$fileName,'public');
            $product->update([
                'name' => $request->name,
                'price' => $request->price,
                'naira_price' => $request->naira_price,
                'quantity' => $request->quantity,
                'photo' => $fileName,
                'description' => $request->description,
                'category_id' => $request->category_id,
            ]);
        }else{
            $product->update([
                'name' => $request->name,
                'price' => $request->price,
                'naira_price' => $request->naira_price,
                'quantity' => $request->quantity,
                'description' => $request->description,
                'category_id' => $request->category_id,
            ]);
        }
       //dd($request->photo);

            return redirect()->route('products')->with('message','Product Updated Successfully!');
   }
}
