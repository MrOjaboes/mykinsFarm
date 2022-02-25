<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $searchTerm = null;
    public function render()
    {

        $products = Product::query()
        ->where('name','like','%'.$this->searchTerm.'%')
        ->orWhere('price','like','%'.$this->searchTerm.'%')
        ->latest()->paginate(10);
       // $products = Product::orderBy('created_at','DESC')->get();
        return view('livewire.product.index',compact('products'));
    }
    public function delete($id)
    {
        Product::find($id)->delete();
        return redirect()->route('products')->with('message','Product Deleted Successfully!');
    }
}
