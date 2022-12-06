<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    //
    public function manager()
    {
        $data['members'] = Member::orderby('id', 'asc')->paginate(5);
        return view('admin.manager_user', $data);
    }

    public function user()
    {
        $data['members'] = Member::orderby('id', 'asc')->paginate(5);
        return view('admin.add_user', $data);
    }

    public function create_user(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'age' => 'required',
            'sex' => 'required',
            'tel' => 'required',
            'position' => 'required',
            'faculty' => 'required',
            'Image' => 'required',
        ]);
        $members = new Member();
        $members->name = $request->name;
        $members->email = $request->email;
        $members->password = $request->password;
        $members->age = $request->age;
        $members->sex = $request->sex;
        $members->tel = $request->tel;
        $members->position = $request->position;
        $members->faculty = $request->faculty;
        $members->Image = $request->Image;
        $members->save();
        return redirect()->route('manager')->with('success', 'car has been created.');
    }



    // new
    public function home()
    {
        if (auth()->user()->is_admin == 1) {
            return view('admin.home');
        } else {
            return view('user.home');
        }
    }
}
