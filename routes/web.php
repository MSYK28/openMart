<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ShoppingCartController;

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


Route::get('/shop', [ShoppingCartController::class, 'hiquipview'])->name('shop');
Route::get('/product/{id}', [ShoppingCartController::class, 'hiquipview_product'])->name('shop.product');
Route::get('/add_to_cart/{product}/', [ShoppingCartController::class, 'add_to_cart'])->name('cart.add');

Route::get('/cart', function () {
    return view('cart.cart');
});


Route::get('/admin/dashboard/', [AdminController::class, 'index'])->name('admin.dashboard');
