<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\AdminContactusModel;
use App\Models\backend\AdminHomeModel;
use App\Models\backend\AdminSignupModel;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function index()
    {
        // $contactus = AdminContactusModel::orderBy('id', 'desc')->get();
        // $data = compact('contactus');
        // return view('backend.index')->with($data);
        return view('backend.login');
    }
    public function home()
    {
        $contactus = AdminContactusModel::orderBy('id', 'desc')->get();
        $data = compact('contactus');
        return view('backend.index')->with($data);
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);
        $securepassword = md5($request->password);
        $admin = AdminSignupModel::where('email', $request->email)->where('securepassword', $securepassword)->first();
        if ($admin) {
            session()->put('email', $admin->email);
            return redirect()->route('dashboard.show');
        } else {
            return redirect()->route('login')->withErrors('Email/Password is Incorrect!');
        }
    }
    public function logout()
    {
        session()->forget('email');
        return redirect()->route('login');
    }
}
