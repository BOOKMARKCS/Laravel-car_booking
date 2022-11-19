<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Car;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('user.home');
    }

    public function adminhome()
    {
        return view('admin.adminhome');
    }
    public function manager()
    {
        $data['bookings'] = Booking::orderby('id', 'asc')->paginate(5);
        if (auth()->user()->is_admin == 1) {

            return view('admin.manager', $data);
        } else {
            return view('user.manager', $data);
        }
    }

}
