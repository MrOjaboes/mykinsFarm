<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function adminProfile(Request $request)
    {
       $data = $request->validate([
            'email' => 'required|email',
            'name' => 'required',
        ]);
        //dd($request->all());
       $user = User::find(auth()->user()->id);
         $user->update([
            'name' => $data['name'],
            'email' => $data['email'],
        ]);
            return redirect()->back()->with('message', 'Details updated succesfully');
    }
    public function update_password(Request $request){
        $validate = $request->validate([
            'oldpassword' => 'required',
            'password' =>'required|required_with:confirm_password'
           ]);
           //dd($validate);
        $user = User::find(Auth::user()->id);
        if($user){
            if(Hash::check($request['oldpassword'],$user->password) && $validate)
            {
                $user->password = Hash::make($request['password']);
                $user->save();
                return redirect()->back()->with('message', 'Password updated succesfully');
            }else{
                return redirect()->back()->with('errormessage', 'Password do not match');
            }

            }

        }
}
