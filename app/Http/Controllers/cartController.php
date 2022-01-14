<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;

class CartController extends Controller
{

        public function add(Product $product)
        {
        // add the product to cart
        \Cart::session(auth()->id())->add(array(
            'id' =>  uniqid($product->id),
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 4,
            'attributes' => array(),
            'associatedModel' => $product,
        ));
        return redirect()->route('cart.list');
        }

    public function cartList()
    {
        dd('ok');
    }


}
