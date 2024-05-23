<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\AdminProfileModel;
use Illuminate\Http\Request;

class AdminProfileController extends Controller
{
    public function index()
    {
        return view('backend.profile');
    }
    public function profile_edit()
    {
        return view('backend.profile-edit');
    }
    public function edit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'skill' => 'required',
            'facebook' => 'required|url',
            'github' => 'required|url',
            'instagram' => 'required|url',
            'linkedin' => 'required|url',
            'phoneno' => 'required|max:14',
            'email' => 'required|email',
            'address' => 'required',
            'resume' => 'mimes:pdf,doc,docx|max:2048',
            'image' => 'mimes:png,jpg,jpeg|max:2048'
        ]);

        // Reume
        $FileName = "resume_ " . time() . "." . $request->resume->extension();
        $FolderPath = 'uploads/resume';
        $FilePath = $FolderPath . "/" . $FileName;
        $request->resume->move(public_path($FolderPath), $FileName);
        // dd($FilePath);

        // Image
        $ImageName = "portfolio_profile_" . time() . "." . $request->image->extension();
        $FolderPath = 'uploads/profile';
        $ImagePath = $FolderPath . "/" . $ImageName;
        $request->image->move(public_path($FolderPath), $ImageName);


        $profile = new AdminProfileModel();
        $ID = $profile->max('id');
        $profile->id = $ID + 1;
        $profile->name = $request->name;
        $profile->skill = $request->skill;
        $profile->facebook = $request->facebook;
        $profile->github = $request->github;
        $profile->instagram = $request->instagram;
        $profile->linkedin = $request->linkedin;
        $profile->phoneno = $request->phoneno;
        $profile->email = $request->email;
        $profile->resume = $FilePath;
        $profile->address = $request->address;
        $profile->image = $ImagePath;
        $profile->save();
        $profile = AdminProfileModel::find(1);
        $data = compact('profile');
        return redirect()->route('profile.show')->with($data)->withsuccess('Profile is Updated!');
    }
}
