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

Route::middleware(['auth'])->group(function () {
    //
    Route::delete('/destroy-booking/{id}', [BookingController::class, 'destroy'])->name('destroy_booking');

    Route::get('/booking', [BookingController::class, 'booking'])->name('booking');
    Route::get('/booking-status', [BookingController::class, 'status'])->name('booking_status');
    Route::get('/booking-history', [BookingController::class, 'history'])->name('booking_history');
    Route::get('/edit-booking/{id}', [BookingController::class, 'edit'])->name('edit_booking');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::put('/update-booking/{id}', [BookingController::class, 'update'])->name('update-booking');

    Route::post('/store', [BookingController::class, 'store'])->name('store');

    //
    Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminhome'])->name('admin.home')->middleware('is_admin');
});
