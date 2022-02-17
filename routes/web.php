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
//Product search

Route::get('/search', [App\Http\Controllers\SearchController::class, 'searchproduct'])->name('product.search');
Route::get('/about-us', function () {
    return view('about');
});
//Admin Login
Route::get('/admin-login', function () {
    return view('auth.admin_login');
});
Route::get('/category/spices&seasonings', function () {
    return view('Categories.spices_seasoning',['products'=> Product::where('category_id',5)->get()]);
});
Route::get('/category/soup-ingredients', function () {
    return view('Categories.soup_ingredients',['products'=> Product::where('category_id',1)->get()]);
});
Route::get('/category/beans&grains', function () {
    return view('Categories.beans_grains',['products'=> Product::where('category_id',2)->get()]);
});
Route::get('/category/dried-vegetable', function () {
    return view('Categories.dried_vegetables',['products'=> Product::where('category_id',4)->get()]);
});
Route::get('/category/flour&swallow', function () {
    return view('Categories.flour_swallow',['products'=> Product::where('category_id',3)->get()]);
});

Route::get('/product/details/{product}', [App\Http\Controllers\ProductController::class, 'product_details'])->name('product.details');
Route::get('/', function () {
    return view('guest',['products'=> Product::all()]);
});
Route::get('/guest', function () {
    return view('guest');
});
Route::post('/cart', [App\Http\Controllers\CartController::class, 'addToCart'])->name('cart.store');
Route::post('/update-cart', [App\Http\Controllers\CartController::class, 'updateCart'])->name('cart.update');
Route::post('/remove', [App\Http\Controllers\CartController::class, 'removeCart'])->name('cart.remove');
Route::post('/clear', [App\Http\Controllers\CartController::class, 'clearAllCart'])->name('cart.clear');
Route::get('/cart/list', [App\Http\Controllers\CartController::class, 'cartList'])->name('cart.list');

 Auth::routes();
Route::group(['middleware' => ['auth']], function () {

    //users
   Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
   Route::get('/checkout', [App\Http\Controllers\OrderController::class, 'create'])->name('checkout');
   Route::post('/checkout', [App\Http\Controllers\OrderController::class, 'store'])->name('checkout');
   //payment using Authorize.net
   Route::get('/payment', [App\Http\Controllers\PaymentController::class, 'index'])->name('payment');
   Route::post('/charge', [App\Http\Controllers\PaymentController::class, 'charge'])->name('charge');


Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin')->middleware('Admin');
Route::get('/admin/orders', [App\Http\Controllers\AdminController::class, 'orders'])->name('admin.orders')->middleware('Admin');
Route::get('/admin/order/{order}', [App\Http\Controllers\AdminController::class, 'editOrder'])->name('edit.order')->middleware('Admin');
Route::post('/admin/order/{order}', [App\Http\Controllers\AdminController::class, 'payment'])->name('update.payment')->middleware('Admin');
Route::get('/admin/profile', [App\Http\Controllers\AdminController::class, 'profile'])->name('admin.profile')->middleware('Admin');
Route::post('/admin/profile', [App\Http\Controllers\ProfileController::class, 'adminProfile'])->name('admin.profile')->middleware('Admin');
Route::post('/admin/profile', [App\Http\Controllers\ProfileController::class, 'update_password'])->name('update.password')->middleware('Admin');
Route::get('/admin/categories', [App\Http\Controllers\AdminController::class, 'categories'])->name('categories')->middleware('Admin');
Route::get('/admin/customers', [App\Http\Controllers\AdminController::class, 'customers'])->name('customers')->middleware('Admin');
Route::get('/admin/products', [App\Http\Controllers\ProductController::class, 'index'])->name('products')->middleware('Admin');
Route::get('/admin/product', [App\Http\Controllers\ProductController::class, 'addProduct'])->name('add-product')->middleware('Admin');
Route::get('/admin/{product}/product-details', [App\Http\Controllers\ProductController::class, 'details'])->name('product-details')->middleware('Admin');
Route::get('/admin/{product}/edit', [App\Http\Controllers\ProductController::class, 'edit'])->name('product-edit')->middleware('Admin');
Route::post('/admin/{product}/edit', [App\Http\Controllers\ProductController::class, 'update'])->name('product-edit')->middleware('Admin');

});
