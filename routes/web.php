<?php

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/', '/home');
 Auth::routes();
Route::group(['middleware' => ['auth']], function () {

    //users
    Route::get('/cart/{product}', [App\Http\Controllers\CartController::class, 'add'])->name('cart.add');
    Route::get('/cart/list', [App\Http\Controllers\CartController::class, 'cartList'])->name('cart.list');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin')->middleware('Admin');
Route::get('/admin/profile', [App\Http\Controllers\AdminController::class, 'profile'])->name('admin.profile')->middleware('Admin');
Route::get('/admin/categories', [App\Http\Controllers\AdminController::class, 'categories'])->name('categories')->middleware('Admin');
Route::get('/admin/customers', [App\Http\Controllers\AdminController::class, 'customers'])->name('customers')->middleware('Admin');
Route::get('/admin/products', [App\Http\Controllers\ProductController::class, 'index'])->name('products')->middleware('Admin');
Route::get('/admin/product', [App\Http\Controllers\ProductController::class, 'addProduct'])->name('add-product')->middleware('Admin');
Route::get('/admin/{product}/product-details', [App\Http\Controllers\ProductController::class, 'details'])->name('product-details')->middleware('Admin');
Route::get('/admin/{product}/edit', [App\Http\Controllers\ProductController::class, 'edit'])->name('product-edit')->middleware('Admin');
Route::post('/admin/{product}/edit', [App\Http\Controllers\ProductController::class, 'update'])->name('product-edit')->middleware('Admin');

});
