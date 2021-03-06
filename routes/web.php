<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ShoppingCartController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CouponsController;
use App\Http\Controllers\WishlistController;
use GuzzleHttp\Middleware;
use App\Http\Controllers\MpesaController;


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

//WISHLIST CONTROLLER
Route::get('/wishlist/view', [WishlistController::class, 'index'])->name('wishlist.view');
// Route::get('/addToWishlits', [WishlistController::class, 'addToWishlist'])->name('wishlist.add');
Route::post('/wishlist/', [WishlistController::class, 'store'])->name('wishlist.add');


//SHOPPING CONTROLLER
Route::get('/', [ShoppingCartController::class, 'hiquipviewindex'])->name('index');
Route::get('/shop', [ShoppingCartController::class, 'hiquipview'])->name('shop');
Route::get('/product/{id}', [ShoppingCartController::class, 'hiquipview_product'])->name('shop.product');
// Route::get('/product/{post}',[ShoppingCartController::class, 'show']);
Route::get('/add_to_cart/{product}/', [ShoppingCartController::class, 'add_to_cart'])->name('cart.add');
Route::post('/update-cart/{itemId}/', [ShoppingCartController::class, 'cart_update'])->name('cart.update');
Route::get('/remove-from-cart/{itemId}', [ShoppingCartController::class, 'cart_remove'])->name('cart.remove');
// Route::get('/checkout', [ShoppingCartController::class, 'checkout'])->name('cart.checkout');
Route::post('/checkout_order/', [ShoppingCartController::class, 'checkout_order'])->name('orders.store')->middleware(['auth','verified']);
// Route::post('/checkout/location/', [ShoppingCartController::class, 'checkout_location']);
Route::get('/cart', [ShoppingCartController::class, 'cart'])->name('cart.cart');
Route::post('/coupon', [CouponsController::class, 'store'])->name('coupon.store');
Route::delete('/coupon',[CouponsController::class, 'destroy'])->name('coupon.destroy');
Route::get('/finish',[ShoppingCartController::class, 'receipt'])->name('cart.finish');


Route::get('/checkout', function() {
        return view('cart.checkout');
});

//ADMIN AND PRODUCTS CONTROLLER
Route::get('/admin/dashboard', [AdminController::class, 'index']);
Route::get('/admin/create', [ProductsController::class, 'index']);
Route::post('/admin/addProduct', [AdminController::class, 'addproduct'])->name('create.product');
Route::get('/admin/editProduct/{id}', [AdminController::class, 'edit_hiquip'])->name('product.edit');
Route::post('/admin/editProduct', [AdminController::class, 'editproduct'])->name('edit.product');
Route::get('/admin/create',[App\Http\Controllers\ProductsController::class, 'create']);
Route::post('/admin', [App\Http\Controllers\ProductsController::class, 'store']);
Route::get('/admin/disable/user/{id}', [ProductsController::class, 'user_disable'])->name('user.disable');
Route::get('/admin/restore/user/{id}', [ProductsController::class, 'user_restore'])->name('user.restore');
Route::get('/admin/product/restore/{id}', [AdminController::class, 'restore_hiquip'])->name('admin.restore_hiquip');
Route::get('/admin/product/disable/{id}', [AdminController::class, 'disable_hiquip'])->name('admin.disablehiquip');

Route::prefix('admin/datatables')->group(
    function(){
        Route::get('/usersTable', [App\Http\Controllers\ProductsController::class, 'users'])->name('admin.datatables.usersTable');
        Route::get('/chart', [App\Http\Controllers\ProductsController::class, 'chart'])->name('admin.datatables.chart');
        Route::get('/', [App\Http\Controllers\ProductsController::class, 'datatables'])->name('admin.datatables.productsTable')->name('admin.products');;
        Route::get('/ordersTable', [App\Http\Controllers\ProductsController::class, 'orders'])->name('admin.datatables.ordersTable');
});

//Mpesa


// STATIC PAGES
Route::get('/about', function () {return view('about');});
Route::get('/blog', function () {return view('blog');});
Route::get('/contact', function () {return view('contact');});
Route::get('/product', function () {return view('shop.product');});
//Route::get('/admin/editProduct', function () {return view('admin.editProduct');});

// Route::get('/product/{post}',[App\Http\Controllers\PostsController::class, 'show']);
