<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;

class Search extends Component
{
    public $term = "";

    public function render()
    {
        sleep(1);
        $products = Product::query()
        ->where('name','like','%'.$this->term.'%')
         ->get();

        $data = [
            'products' => $products,
        ];
        return view('livewire.admin.search',compact('data','products'));
    }

    public function search()
    {
      $this->term = "";
    }
}
