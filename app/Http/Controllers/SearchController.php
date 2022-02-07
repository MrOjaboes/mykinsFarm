<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchproduct(Request $request)
    {
        $data = request()->validate([
            'term' => 'required|min:3',

        ]);
        $query = $data['term'];

       //dd($request->term);
        $prod = Product::where('price','like', "%$query%")
         ->get();
         return view('layouts.front',compact('prod'));
    }
}
