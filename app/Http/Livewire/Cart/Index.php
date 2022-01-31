<?php

namespace App\Http\Livewire\Cart;

use Livewire\Component;
use Darryldecode\Cart\Cart;
use Illuminate\Support\Facades\Request;

class Index extends Component
{
    public function render()
    {
        $cartItems = \Cart::getContent();
        return view('livewire.cart.index',compact('cartItems'));
    }
    public function removeCart(Request $request)
    {
        \Cart::remove($request->id);
     return redirect()->route('cart.list')->with('message','Product removed successfully!');
    }
    public function clearCart()
    {
        //dd('ok');
        \Cart::clear();
        return redirect()->route('cart.list')->with('message','Cart cleared successfully!');
    }
}
