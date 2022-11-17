<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BookingController;

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
Route::middleware(['auth'])->group(function () {
    Route::get('/booking',[BookingController::class, 'booking'])->name('booking');
    Route::get('/booking-status',[BookingController::class, 'booking_status'])->name('booking_status');
    Route::get('/edit-booking',[BookingController::class, 'edit_booking'])->name('edit_booking');
    Route::get('/booking-history',[BookingController::class, 'booking_history'])->name('booking_history');

    Route::post('/store', [BookingController::class, 'store'])->name('store');

});
