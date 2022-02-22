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

Route::get('/', function () {
    return view('index');
})->name('home');

Auth::routes(['verify' => true]);




Route::get('/home', function () {
     return view('home');
 })->middleware(['auth','verified'])->name('home');

Route::get('/admin/dashboard/', [AdminController::class, 'index'])->name('admin.dashboard');
