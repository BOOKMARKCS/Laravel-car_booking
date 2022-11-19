<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Car;
use App\Models\Driver;
use App\Models\Member;

class BookingController extends Controller
{
    //
    public function booking()
    {
        $data['bookings'] = Booking::orderby('id', 'asc')->paginate(5);
        if (auth()->user()->is_admin == 1) {

            return view('admin.booking', $data);
        } else {
            return view('user.booking');
        }
    }
    public function add_booking()
    {
        $data['bookings'] = Booking::orderby('id', 'asc')->paginate(5);
        return view('admin.add_booking', $data);
    }
    public function status()
    {
        $data['bookings'] = Booking::orderby('id', 'desc')->paginate(5);
        return view('user.booking_status', $data);
    }

    public function history()
    {
        $data['bookings'] = booking::orderby('id', 'asc')->paginate(5);
        return view('user.booking_history', $data);
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
        if (auth()->user()->is_admin == 1) {
            return redirect()->route('manager')->with('success', 'Booking has been created.');
        } else {

            return redirect()->route('booking-status')->with('success', 'Booking has been created.');
        }
    }
    public function edit($id)
    {
        $booking = Booking::find($id);
        return view('user.edit-booking', compact('booking'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'origin' => 'required',
            'destination' => 'required',
            'dt_origin' => 'required',
            'dt_destination' => 'required',
            'numbers' => 'required',
        ]);
        $booking = Booking::find($id);
        $booking->name = $request->name;
        $booking->origin = $request->origin;
        $booking->destination = $request->destination;
        $booking->dt_origin = $request->dt_origin;
        $booking->dt_destination = $request->dt_destination;
        $booking->numbers = $request->numbers;
        $booking->save();
        return redirect()->route('booking-status')->with('success', 'booking has been updated successfully.');
    }
    public function destroy($id)
    {
        $booking = Booking::find($id);
        $booking->delete();
        if (auth()->user()->is_admin == 1) {
            return redirect()->route('admin.booking')->with('success', 'booking has been deleted successfully.');
        } else {
            return redirect()->route('booking-status')->with('success', 'booking has been deleted successfully.');
        }
    }
    public function allow($id)
    {
        $booking = Booking::find($id);
        return view('admin.Allow_booking', compact('booking'));
    }

    public function create_allow(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'origin' => 'required',
            'destination' => 'required',
            'dt_origin' => 'required',
            'dt_destination' => 'required',
            'numbers' => 'required',
            'user_id' => 'required',
            'car_id' => 'required',
            'driver_id' => 'required',
        ]);
        $booking = Booking::find($id);
        $booking->name = $request->name;
        $booking->origin = $request->origin;
        $booking->destination = $request->destination;
        $booking->dt_origin = $request->dt_origin;
        $booking->dt_destination = $request->dt_destination;
        $booking->numbers = $request->numbers;
        $booking->user_id = $request->user_id;
        $booking->car_id = $request->car_id;
        $booking->driver_id = $request->driver_id;
        $booking->status = 1;


        $booking->save();
        // return redirect()->route('booking')->with('success', 'booking has been updated successfully.');
        return redirect('booking')->with('status', 'We received your message. We will get back to you soon.')->withErrors(['Your message may be a duplicate. Did you refresh the page? We blocked that submission. If you feel this was in error, e-mail us or call us.']);
    
    }
}
