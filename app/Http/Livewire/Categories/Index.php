<?php

namespace App\Http\Livewire\Categories;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Validator;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $state = [];
    public $cat;
    public $showEdit = false;
    public function render()
    {
        $categories = Category::orderBy('created_at','DESC')->paginate(2);
        return view('livewire.categories.index',compact('categories'));
    }
    public function storeCat()
    {
        $validated = Validator::make($this->state,[
            'title' => 'required',
        ])->validate();
        Category::create($validated);
        return redirect()->route('categories')->with('message','Category Added Successfully!');
    }
    public function edit(Category $cat)
    {
        $this->cat = $cat;
        $this->showEdit = true;
        //dd($user->toArray());
        $this->state = $cat->toArray();
    }

    public function updateCat(Category $cat)
    {
        $validated = Validator::make($this->state,[
            'title' => 'required',

        ])->validate();

      $this->cat->update($validated);
      return redirect()->route('categories')->with('message','Category Updated Successfully!');
    }
    public function delete($id)
    {
        Category::find($id)->delete();
        return redirect()->route('categories')->with('message','Category Deleted Successfully!');
    }
}
