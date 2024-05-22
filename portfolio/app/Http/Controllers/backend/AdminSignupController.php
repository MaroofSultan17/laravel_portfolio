<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\AdminSignupModel;
use Illuminate\Http\Request;

class AdminSignupController extends Controller
{
    public function index()
    {
        return view('backend.signup');
    }
    public function register(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        $securepassword = md5($request->password);
        $admin = new AdminSignupModel();
        $ID = $admin->max('id');
        $admin->id = $ID + 1;
        $admin->fullname = $request->fullname;
        $admin->email = $request->email;
        $admin->password = $request->password;
        $admin->securepassword = $securepassword;
        if ($admin->save()) {
            return redirect()->route('dashboard.show')->withsuccess('Congratulations Your Account is Ready!');
        } else {
            return back()->withErrors('Something is Wrong');
        }
    }
}
