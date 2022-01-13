<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/customers', [App\Http\Controllers\HomeController::class, 'customers'])->name('customers');
Route::get('/home/products', [App\Http\Controllers\ProductController::class, 'index'])->name('products');
Route::get('/home/product', [App\Http\Controllers\ProductController::class, 'addProduct'])->name('add-product');
Route::get('/home/{product}/product-details', [App\Http\Controllers\ProductController::class, 'details'])->name('product-details');
Route::get('/home/{product}/edit', [App\Http\Controllers\ProductController::class, 'edit'])->name('product-edit');
Route::post('/home/{product}/edit', [App\Http\Controllers\ProductController::class, 'update'])->name('product-edit');
