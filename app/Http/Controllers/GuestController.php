<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $first_row = Product::where('price','<',400)->take(4)->get();
        $second_row = Product::where('price','>',400)->take(4)->get();
        $third_row = Product::where('price','>',200)->take(4)->get();
        return view('guest',compact('first_row','second_row','third_row','products'));
    }
}
