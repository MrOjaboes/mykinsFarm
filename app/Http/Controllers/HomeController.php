<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('Users.home');
    }
    public function profile()
    {
       
        $profiles = Profile::where('user_id',auth()->user()->id)->get();
        return view('Users.profile',compact('profiles'));
    }

    public function updateProfile(Request $request)
    {
        //dd($request->all());
        DB::table('profiles')
    ->where('user_id',auth()->user()-> id)
    ->update([
        'name' => $request->name,
        'address' => $request->address,
        'email' => $request->email,
        'contact' => $request->contact,
        'state' => $request->state,
        'city' => $request->city,
    ]);
    return redirect()->back()->with('message', 'Profile updated succesfully');

    }
    public function updateDetails(Request $request)
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

    public function updatePassword(Request $request)
    {
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
    public static function GetProductById($product_id){
        //$user = User::first('id', $user_id);
      $product = DB::table('products')->where('id', $product_id)->first();
      //dd($user);
      return $product->name;
  }
    public static function GetUserById($user_id){
        //$user = User::first('id', $user_id);
      $user = DB::table('users')->where('id', $user_id)->first();
      //dd($user);
      return $user->name;
  }
}
