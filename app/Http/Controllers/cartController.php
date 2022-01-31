<?php

namespace App\Http\Controllers;

use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;

class CartController extends Controller
{

        public function addToCart(Request $request)
        {
        // add the re$request to cart
        \Cart::add([
            'id' =>  $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'photo'=> $request->photo,
            )

        ]);
        session()->flash('message','product added successfully!');
        return redirect()->route('cart.list');
        }

    public function cartList()
    {
       //$cartItems = \Cart::getContent();
       //dd($cartItems);
       return view('cart_list');
    }
public function updateCart(Request $request)
{
    \Cart::update(
        $request->id,
        [
        'quantity'=>[
        'relative'=> false,
        'value'=> $request->quantity
        ],
           ]
    );
    return redirect()->route('cart.list')->with('message','Item updated successfully!');
        }
        public function removeCart(Request $request)
        {
            \Cart::remove($request->id);
         return redirect()->route('cart.list')->with('message','Product removed successfully!');
        }
        public function clearCart()
        {
            \Cart::clear();
            return redirect()->route('cart.list')->with('message','Cart cleared successfully!');
        }
}
