<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\AdminProfileModel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class AdminProfileController extends Controller
{
    public function index()
    {
        $profiledata = AdminProfileModel::first();
        $data = compact('profiledata');
        return view('backend.profile')->with($data);
    }
    public function profile_edit()
    {
        if (!session()->has('email')) {
            return redirect()->route('login');
        } else {
            $profiledata = AdminProfileModel::where('id', '1')->first();
            $data = compact('profiledata');
            return view('backend.profile-edit')->with($data);
        }
    }
    public function edit(Request $request)
    {
        $profile = AdminProfileModel::where('id', '1')->first();
        $defaultResume = $profile->resume;
        $defaultImage = $profile->image;
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
            'resume' => 'nullable|mimes:pdf,doc,docx|max:1024',
            'image' => 'nullable|mimes:png,jpg,jpeg|max:1024'
        ]);

        if ($request->hasFile('image')) {
            if ($profile->image) {
                Storage::delete("public/" . $profile->image);
            }
            // Image
            $ImageName = "portfolio_profile_" . time() . "." . $request->image->extension();
            $FolderPath = 'uploads/profile';
            $ImagePath = $FolderPath . "/" . $ImageName;
            $request->image->move(public_path($FolderPath), $ImageName);
            $profile->image = $ImagePath;
        } else
            $profile->image = $defaultImage;

        if ($request->hasfile('resume')) {
            if ($profile->resume) {
                Storage::delete("public/" . $profile->resume);
            }
            // Reume
            $FileName = "resume_ " . time() . "." . $request->resume->extension();
            $FolderPath = 'uploads/resume';
            $FilePath = $FolderPath . "/" . $FileName;
            $request->resume->move(public_path($FolderPath), $FileName);
            // dd($FilePath);
            $profile->resume = $FilePath;
        } else {
            $profile->resume = $defaultResume;
        }
        // $ID = $profile->max('id');
        // $profile->id = 1;
        $profile->name = $request->name;
        $profile->skill = $request->skill;
        $profile->facebook = $request->facebook;
        $profile->github = $request->github;
        $profile->instagram = $request->instagram;
        $profile->linkedin = $request->linkedin;
        $profile->phoneno = $request->phoneno;
        $profile->email = $request->email;
        $profile->address = $request->address;
        $profile->save();
        // $profile = AdminProfileModel::find(1);
        // $data = compact('profile');
        return redirect()->route('profile.show')->withsuccess('Profile is Updated!');
    }
}
