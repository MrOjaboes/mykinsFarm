<?php

namespace App\Http\Livewire\Cart;

use App\Models\Profile;
use Livewire\Component;

class Checkout extends Component
{
    public function render()
    {

        $profiles = Profile::where('user_id',auth()->user()->id)->get();
        return view('livewire.cart.checkout',compact('profiles'));
    }
}
