<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductSearch extends Component
{
    public $searchTerm = null;
    public function render()
    {
        $products = Product::query()
        ->where('name','like','%'.$this->searchTerm.'%')
          ->latest()->get();
        return view('livewire.product-search',compact('products'));
    }
}
