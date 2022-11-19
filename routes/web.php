<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DriverController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
    //
    Route::delete('/destroy-booking/{id}', [BookingController::class, 'destroy'])->name('destroy_booking');

    Route::get('/booking', [BookingController::class, 'booking'])->name('booking');
    Route::get('/booking-status', [BookingController::class, 'status'])->name('booking-status');
    Route::get('/booking-history', [BookingController::class, 'history'])->name('booking_history');
    Route::get('/edit-booking/{id}', [BookingController::class, 'edit'])->name('edit_booking');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


    Route::put('/update-booking/{id}', [BookingController::class, 'update'])->name('update-booking');

    Route::post('/store', [BookingController::class, 'store'])->name('store');
    Route::post('create_car', [CarController::class, 'create_car'])->name('create.car');
    Route::post('/create_user', [Controller::class, 'create_user'])->name('create.user');
    Route::post('/create_driver', [DriverController::class, 'create_driver'])->name('create.driver');

    //
    Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminhome'])->name('admin.home')->middleware('is_admin');
    Route::get('/manager', [HomeController::class, 'manager'])->name('manager');
    Route::get('/car', [CarController::class, 'car'])->name('car');
    Route::get('/manager-car', [CarController::class, 'manager'])->name('manager-car');
    Route::get('/manager-user', [Controller::class, 'manager'])->name('manager-user');
    Route::get('/user', [Controller::class, 'user'])->name('user');
    Route::get('/manager-driver', [DriverController::class, 'manager_driver'])->name('manager-driver');
    Route::get('/driver', [DriverController::class, 'driver'])->name('driver');
    Route::get('/add-booking', [BookingController::class, 'add_booking'])->name('add-booking');
    Route::get('/allow/{id}', [BookingController::class, 'allow'])->name('allow');
    Route::put('/create_allow/{id}', [BookingController::class, 'create_allow'])->name('create_allow');





    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');
    Route::get('/contact', function () {
        return view('contact');
    })->name('contact');
});
