<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {

        $data = request()->validate([
            'query' => 'required|min:3',
        ]);
        dd($data);
        $query = $data;
       // dd($request->term);
        $products = Product::where('name','like', "%$query%")
         ->get('name');
         return view('guest',compact('products'));
    }
}
