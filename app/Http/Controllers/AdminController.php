<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

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
    public function payment(Order $order, Request $request)
    {
       $data = $request->validate([
            'status' => 'required|in:pending,processing,completed,decline',
            'is_paid' => '',
        ]);
        //dd($data['is_paid']);
        if($data['is_paid'] == 1){
            $order->update([
                'is_paid' => $data['is_paid'],
                'status' => $data['status']
            ]);
        }else{
            $order->update([
                'status' => $data['status']
            ]);
        }


        return redirect()->back()->with('message','Payment Marked Successfully!');

    }
    public function orders()
    {
        return view('Admin.orders');
    }
    public function editOrder(Order $order)
    {
        //dd($order);
        $items = DB::table('order_items')
       ->where('order_id', '=',$order->id)
       ->get();
        return view('Admin.edit-order',compact('order','items'));
    }

}
