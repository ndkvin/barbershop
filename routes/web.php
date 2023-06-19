<?php

use App\Http\Controllers\Admin\BarbermanConroller;
use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\OrderController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes([
  'reset' => false,
  'verify' => false,
]);

Route::group([
  'prefix' => 'admin',
  'middleware' => ['auth', 'admin'],
  'as' => 'admin.',
], function() {
  Route::get('/', function() {
    return view('pages.admin.index');
  })->name('dashboard');
  Route::resource('product', ProductController::class)->except(['create', 'edit']);
  Route::resource('barberman', BarbermanConroller::class)->except(['create', 'edit']);
  Route::resource('order', OrderController::class)->except(['create', 'edit']);
  Route::resource('booking', BookingController::class)->except(['create', 'edit']);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
