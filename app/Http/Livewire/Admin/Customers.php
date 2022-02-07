<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class Customers extends Component
{
    public function render()
    {
        $users = User::where('user_type',0)->get();
        return view('livewire.admin.customers',compact('users'));
    }
}
