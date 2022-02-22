<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/home', function () {
    return view('index');
})->middleware(['auth','verified'])->name('home');

Auth::routes(['verify' => true]);

// Route::get('/dashoard', function () {
//     return view('dashboard');
// })->middleware(['auth','verified'])->name('dashboard');


Route::get('/home', function () {
     return view('home');
 })->middleware(['auth','verified'])->name('home');


