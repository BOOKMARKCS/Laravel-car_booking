<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    //
    public function booking()
    {
        return view('user.booking');
    }
    public function booking_status()
    {
        $data['bookings'] = Booking::orderby('id', 'desc')->paginate(5);
        return view('user.booking_status', $data);
    }

    public function booking_history()
    {
        return view('user.booking_history');
    }


    //
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'origin' => 'required',
            'destination' => 'required',
            'd_date' => 'required',
            'd_time' => 'required',
            'r_date' => 'required',
            'r_time' => 'required',
            'numbers' => 'required',
        ]);
        $booking = new Booking;
        $booking->name = $request->name;
        $booking->origin = $request->origin;
        $booking->destination = $request->destination;
        $booking->dt_origin = $request->d_date . ' ' . $request->d_time;
        $booking->dt_destination = $request->r_date . ' ' . $request->r_time;
        $booking->numbers = $request->numbers;
        $booking->save();
        return redirect()->route('booking_status')->with('success', 'Booking has been created.');
    }
    public function edit_booking(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'origin' => 'required',
            'destination' => 'required',
            'd_date' => 'required',
            'd_time' => 'required',
            'r_date' => 'required',
            'r_time' => 'required',
            'numbers' => 'required',
        ]);
        $booking = Booking::find($id);
        $booking->name = $request->name;
        $booking->origin = $request->origin;
        $booking->destination = $request->destination;
        $booking->dt_origin = $request->d_date . ' ' . $request->d_time;
        $booking->dt_destination = $request->r_date . ' ' . $request->r_time;
        $booking->numbers = $request->numbers;
        $booking->save();
        return redirect()->route('booking_status')->with('success', 'booking has been updated successfully.');
    }
}
