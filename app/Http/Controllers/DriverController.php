<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function manager_driver()
    {
        $data['drivers'] = Driver::orderby('id', 'asc')->paginate(5);
            return view('admin.manager_driver', $data);
    }

    public function driver()
    {
        $data['drivers'] = Driver::orderby('id', 'asc')->paginate(5);
        return view('admin.add_driver', $data);
    }
    //
    public function create_driver(Request $request)
    {
        $request->validate([
            'driver_name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'age' => 'required',
            'sex' => 'required',
            'position' => 'required',
            // 'faculty' => 'required',
            'tel' => 'required',
            'driver_license' => 'required',
            'driver_license_expiration' => 'required',
        ]);
        $drivers = new Driver();
        $drivers->driver_name = $request->driver_name;
        $drivers->email = $request->email;
        $drivers->password = $request->password;
        $drivers->age = $request->age;
        $drivers->sex = $request->sex;
        $drivers->position = $request->position;
        $drivers->faculty = $request->faculty;
        $drivers->tel = $request->tel;
        $drivers->driver_license = $request->driver_license;
        $drivers->driver_license_expiration = $request->driver_license_expiration;

        $drivers->save();
        return redirect()->route('manager-driver')->with('success', 'Driver has been created.');
    }
}
