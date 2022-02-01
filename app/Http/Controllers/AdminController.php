<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::where('user_type',0)->count();
        $products = Product::all()->count();
        $categories = Category::all()->count();
        $orders = Order::all()->count();
        return view('Admin.index',compact('users','products','categories','orders'));
    }
    public function profile()
    {
        return view('Admin.Profile.index');
    }
    public function customers()
    {
        return view('Admin.Customers.index');
    }
    public function categories()
    {
        return view('Admin.categories.index');
    }
}
