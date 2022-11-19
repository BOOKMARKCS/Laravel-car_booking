<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    //
    public function manager()
    {
        $data['cars'] = Car::orderby('id', 'asc')->paginate(5);
            return view('admin.manager_car', $data);
    }

    public function car()
    {
        $data['cars'] = Car::orderby('id', 'asc')->paginate(5);
        return view('admin.add_car', $data);
    }

    public function create_car(Request $request)
    {
        $request->validate([
            'car_registration' => 'required',
            'model' => 'required',
            'color' => 'required',
            'type' => 'required',
            'acr_date' => 'required',
            'act_expiration_date' => 'required',
            'oil' => 'required',
            'image' => 'required',
        ]);
        $cars = new Car();
        $cars->car_registration = $request->car_registration;
        $cars->model = $request->model;
        $cars->color = $request->color;
        $cars->type = $request->type;
        $cars->acr_date = $request->acr_date;
        $cars->act_expiration_date = $request->act_expiration_date;
        $cars->oil = $request->oil;
        $cars->image = $request->image;
        $cars->status = "Ready";
        $cars->save();
        return redirect()->route('manager')->with('success', 'car has been created.');
    }

}
