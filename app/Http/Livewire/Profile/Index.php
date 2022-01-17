<?php

namespace App\Http\Livewire\Profile;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;

class Index extends Component
{
    public $email;
    public function render()
    {
        return view('livewire.profile.index');
    }

    public function update()
    {
        $validated = Validator::make($this->state,[
            'name' => 'required',
            'email' => 'required',
        ])->validate();
        dd($validated);
        User::find(auth()->user()->id)->update([
            'name' =>  $validated['name'],
            'email' =>  $validated['email'],
            ]
        );
        return redirect()->route('admin.profile')->with('message','Details Updated Successfully!');
    }
}
