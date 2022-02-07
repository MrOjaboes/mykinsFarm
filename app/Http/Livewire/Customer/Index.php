<?php

namespace App\Http\Livewire\Customer;

use App\Models\User; 
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $users = User::where('user_type',0)->get();
        return view('livewire.customer.index',compact('users'));
    }
}
