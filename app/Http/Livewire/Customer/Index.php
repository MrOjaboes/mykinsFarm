<?php

namespace App\Http\Livewire\Customer;

use App\Models\Product;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $products = Product::all();
        return view('livewire.customer.index',compact('products'));
    }
}
