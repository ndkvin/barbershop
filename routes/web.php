<?php

use App\Http\Controllers\Admin\BarbermanConroller;
use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\OrderController;

use App\Http\Controllers\Customer\EditCustomerController;
use App\Http\Controllers\Customer\HistoryCustomerController;

use App\Http\Controllers\Barber\EditBarberController;

use App\Http\Controllers\LandingPage\LandingPageController;

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

Route::group([
  'prefix' => 'barberman',
  'middleware' => ['auth', 'barberman'],
  'as' => 'barberman.',
], function() {
  Route::resource('edit_profile', EditBarberController::class);
});

Route::group([
  'prefix' => 'customer',
  'middleware' => ['auth', 'customer'],
  'as' => 'customer.',
], function() {
  Route::get('/', function() {
    return view('pages.customer.index');
  })->name('dashboard');
  Route::resource('edit_profile', EditCustomerController::class);
  Route::resource('history', HistoryCustomerController::class);
});

Route::get('/', [App\Http\Controllers\LandingPage\LandingPageController::class, 'index'])->name('home');
