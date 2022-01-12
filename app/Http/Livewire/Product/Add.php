<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use Livewire\WithFileUploads;
class Add extends Component
{
    use WithFileUploads;
    public $state = [];
    public $user;
    public $photo;
    public function render()
    {
        return view('livewire.product.add');
    }
    public function addProduct()
    {
        $validated = Validator::make($this->state,[
            'title' => 'required',
            'price' => 'required',
            'description' => 'required',

        ])->validate();
          if($this->photo){
                $fileName = $this->photo->getClientOriginalName();
               $this->photo->storeAs('Products',$fileName,'public');
            $validated['photo'] = $fileName;
        }
        Product::create($validated);
         return redirect()->route('products')->with('message','Product Added Successfully!');
    }
}
