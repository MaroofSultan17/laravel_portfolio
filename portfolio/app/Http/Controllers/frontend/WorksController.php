<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\backend\AdminWorksModel;
use App\Models\frontend\ProfileModel;
use Illuminate\Http\Request;

class WorksController extends Controller
{
    public function index()
    {
        $works = AdminWorksModel::get();
        $profile = ProfileModel::first();
        $data = compact('works', 'profile');
        return view('frontend.portfolio')->with($data);
    }
}
