<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;

class orderController extends Controller
{
    public function create(Request $request)
    {
        return view('checkout2');
    }
    public function store(Request $request)
    {
        $order = new Order();
        $order->user_id = auth()->id();
        $order->order_number = uniqid('order_number');
        $order->shipping_fullname = $request->fname .' '. $request->lname;
        $order->shipping_address = $request->shipping_address;
        $order->shipping_contact = $request->shipping_contact;
        $order->shipping_state = $request->shipping_state;
        $order->shipping_city = $request->shipping_city;
        $order->note = $request->note;
        if(!$request->has('billing_fname')){
            $order->billing_fullname = $request->fname .' '. $request->lname;
            $order->billing_address = $request->shipping_address;
            $order->billing_contact = $request->shipping_contact;
            $order->billing_state = $request->shipping_state;
            $order->billing_city = $request->shipping_city;
        }else{
            $order->billing_fullname = $request->billing_fullname;
            $order->billing_address = $request->billing_address;
            $order->billing_contact = $request->billing_contact;
            $order->billing_state = $request->billing_state;
            $order->billing_city = $request->billing_city;
        }
        $order->grand_total = \Cart::getTotal();
        $order->item_count = \Cart::getTotalQuantity();
        if($request->payment_method == "Cash On Delivery"){
            $order->payment_method = "Cash On Delivery";
          }elseif($request->payment_method == "Authorize"){
            $order->payment_method = "Authorize";

           // $order->payment_method = "Paypal";
          }
        $order->save();
        //save order items
        $cartItems = \Cart::getContent();
        foreach($cartItems as $item){
     $order->items()->attach($item->id,['price'=> $item->price,'quantity'=>$item->quantity]);
        }
        //Payment Method
        return redirect()->route('payment');
        //clear cart
        \Cart::clear();
     //send mail to customer

        //take user to thank you page
        return view('thank_you');

       //dd(auth()->user()->id);
    }
}
