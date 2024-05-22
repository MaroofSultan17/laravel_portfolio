<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\backend\AdminWorksModel;
use Illuminate\Http\Request;

class WorksController extends Controller
{
    public function index()
    {
        $works = AdminWorksModel::get();
        $data = compact('works');
        return view('frontend.portfolio')->with($data);
    }
}
