<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchproduct(Request $request)
    {
        $data = request()->all();
        $query = $data['query'];
       //dd($request->term);
        $prod = Product::select('name')
        ->where('name','like', '%'.$query.'%')
         ->get();
         return response()->json($prod);
    }
}
