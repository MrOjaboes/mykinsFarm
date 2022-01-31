<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Login extends Component
{
    public $email,$password;
    public function render()
    {
        return view('livewire.admin.login');
    }
    public function login()
    {
        $data = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if(auth()->attempt(array('email' => $data['email'], 'password' => $data['password'])))
        {
            switch(auth()->user()->user_type) {
                case 1:
                    return redirect()->route('admin');

                  break;
                default:
                return redirect()->route('admin.login');
              }

       }else{
            return redirect()->back()->with('error','Email And Password Do not Match.');
        }
        dd('ok');
    }
}
