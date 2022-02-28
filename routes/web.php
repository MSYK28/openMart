<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ShoppingCartController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CouponsController;
use GuzzleHttp\Middleware;


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

// Auth::routes();
Auth::routes(['verify' => true]);

// isUser
Route::group(['middleware' => ['auth', ]], function() {
        Route::get('/home', function () {return view('index');});
        Route::get('/', function () {return view('index');});
        Route::get('/home', function () {return view('index');});
});


//SHOPPING CONTROLLER
Route::get('/', [ShoppingCartController::class, 'hiquipviewindex'])->name('index');
Route::get('/shop', [ShoppingCartController::class, 'hiquipview'])->name('shop');
Route::get('/product/{id}', [ShoppingCartController::class, 'hiquipview_product'])->name('shop.product');
Route::get('/product/{post}',[ShoppingCartController::class, 'show']);
Route::get('/add_to_cart/{product}/', [ShoppingCartController::class, 'add_to_cart'])->name('cart.add');
Route::post('/update-cart/{itemId}/', [ShoppingCartController::class, 'cart_update'])->name('cart.update');
Route::get('/remove-from-cart/{itemId}', [ShoppingCartController::class, 'cart_remove'])->name('cart.remove');
Route::get('/checkout', function () {
    return view('cart.checkout');
});
Route::post('/checkout_order/', [ShoppingCartController::class, 'checkout_order'])->name('orders.store')->middleware(['auth','verified']);
Route::post('/checkout/location/', [ShoppingCartController::class, 'checkout_location']);
Route::get('/cart', [ShoppingCartController::class, 'cart'])->name('cart.cart');
Route::post('/coupon', [CouponsController::class, 'store'])->name('coupon.store');
Route::delete('/coupon',[CouponsController::class, 'destroy'])->name('coupon.destroy');


//ADMIN AND PRODUCTS CONTROLLER
Route::get('/admin/dashboard', [AdminController::class, 'index']);
Route::get('/admin/create', [ProductsController::class, 'index']);
Route::post('/admin/addProduct', [AdminController::class, 'addproduct'])->name('create.product');
// Route::post('/admin/editProduct', [AdminController::class, 'editproduct'])->name('edit.product');
Route::get('/admin/create',[App\Http\Controllers\ProductsController::class, 'create']);
Route::post('/admin', [App\Http\Controllers\ProductsController::class, 'store']);

Route::prefix('admin/datatables')->group(
    function(){
        Route::get('/usersTable', [App\Http\Controllers\ProductsController::class, 'users'])->name('admin.datatables.usersTable');
        Route::get('/', [App\Http\Controllers\ProductsController::class, 'datatables'])->name('admin.datatables.productsTable');
        Route::get('/ordersTable', [App\Http\Controllers\ProductsController::class, 'orders'])->name('admin.datatables.ordersTable');
});


// STATIC PAGES
Route::get('/about', function () {return view('about');});
Route::get('/blog', function () {return view('blog');});
Route::get('/contact', function () {return view('contact');});
Route::get('/product', function () {return view('shop.product');});
// Route::get('/cart', function () {return view('cart.cart');});
// Route::get('/checkout', function () {return view('cart.checkout');});
Route::get('/wishlist', function () {return view('shop.wishlist');});
Route::get('/admin/editProduct', function () {return view('admin.editProduct');});


// Route::get('/product/{post}',[App\Http\Controllers\PostsController::class, 'show']);