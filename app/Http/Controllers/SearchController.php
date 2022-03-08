<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchproduct(Request $request)
    {
          $query = $request->searchTerm;
       //dd($request->term);
        $products = Product::where('name','like', '%'.$query.'%')->get();
         return view('search',compact('products'));
    }
}
