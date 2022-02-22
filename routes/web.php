<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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

Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/', function () {
    return view('index');
});

Route::get('/home', function () {
    return view('index');
})->name('home');

Route::get('/shop', function () {
    return view('shop.shop');
});

Route::get('/product', function () {
    return view('shop.product');
});

Route::get('/cart', function () {
    return view('cart.cart');
});


Route::get('/admin/dashboard/', [AdminController::class, 'index'])->name('admin.dashboard');
