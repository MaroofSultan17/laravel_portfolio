<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\AdminProfileModel;
use Illuminate\Http\Request;

class AdminProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.profile');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AdminProfileModel $adminProfileModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AdminProfileModel $adminProfileModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AdminProfileModel $adminProfileModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AdminProfileModel $adminProfileModel)
    {
        //
    }
}
