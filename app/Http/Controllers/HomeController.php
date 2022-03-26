<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('home');
    }
    public function profile()
    {

        return view('Users.profile');
    }

    public static function GetProductById($product_id){
        //$user = User::first('id', $user_id);
      $product = DB::table('products')->where('id', $product_id)->first();
      //dd($user);
      return $product->name;
  }
    public static function GetUserById($user_id){
        //$user = User::first('id', $user_id);
      $user = DB::table('users')->where('id', $user_id)->first();
      //dd($user);
      return $user->name;
  }
}
