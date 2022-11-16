<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    //
    public function booking()
    {
        return view('user.booking');
    }
    public function booking_status()
    {
        return view('user.booking_status');
    }
    public function edit_booking()
    {
        return view('user.edit-booking');
    }
    public function booking_history()
    {
        return view('user.booking_history');
    }
}
