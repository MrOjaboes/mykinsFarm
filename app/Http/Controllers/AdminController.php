<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('Admin.index');
    }
    public function profile()
    {
        return view('Admin.Profile.index');
    }
    public function customers()
    {
        return view('Admin.Customers.index');
    }
    public function categories()
    {
        return view('Admin.categories.index');
    }
}
