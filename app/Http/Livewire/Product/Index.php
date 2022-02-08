<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $products = Product::orderBy('created_at','DESC')->get();
        return view('livewire.product.index',compact('products'));
    }
    public function delete($id)
    {
        Product::find($id)->delete();
        return redirect()->route('products')->with('message','Product Deleted Successfully!');
    }
}
