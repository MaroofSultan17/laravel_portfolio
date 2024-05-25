<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\AdminWorksModel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class AdminWorksController extends Controller
{
    public function index()
    {
        if (!session()->has('email')) {
            return redirect()->route('login');
        } else {
            $works = AdminWorksModel::get();
            $data = compact('works');
            return view('backend.works')->with($data);
        }
    }
    public function add_works()
    {
        if (!session()->has('email')) {
            return redirect()->route('login');
        } else {
            return view('backend.works-add');
        }
    }
    public function register_works(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required | min:03',
            'client' => 'required',
            'languages' => 'required',
            'link' => 'required | url',
            'details' => 'required | min:100',
            'image' => 'required|mimes:jpg,png,jpeg|max:5000'
        ]);
        // dd($request);
        $ImageName = "portfolio_works_" . time() . "." . $request->image->extension();
        $FolderPath = 'uploads/works';
        $ImagePath = $FolderPath . "/" . $ImageName;
        $request->image->move(public_path($FolderPath), $ImageName);
        // echo $ImagePath;
        // dd();
        $works = new AdminWorksModel();
        $MaxID = $works->max('workid');
        $works->workid = $MaxID + 1;
        $works->name = $request->name;
        $works->type = $request->type;
        $works->client = $request->client;
        $works->languages = $request->languages;
        $works->link = $request->link;
        $works->details = $request->details;
        $works->image = $ImagePath;
        $works->save();
        return back()->withsuccess('Works Add Successfully!');
    }
    public function edit_works_show($id)
    {
        if (!session()->has('email')) {
            return redirect()->route('login');
        } else {
            $works = AdminWorksModel::where('workid', $id)->first();
            if (is_null($works)) {

            } else {
                $data = compact('works');
                return view('backend.works-edit')->with($data);
            }
        }
    }
    public function update_works(Request $request, $id)
    {
        $works = AdminWorksModel::where('workid', $id)->first();
        $request->validate([
            'name' => 'required',
            'type' => 'required|min:3',
            'client' => 'required',
            'languages' => 'required',
            'link' => 'required|url',
            'details' => 'required|min:100',
            'image' => 'nullable|mimes:jpg,png,jpeg|max:1024'
        ]);
        if ($request->hasFile('image')) {
            if ($works->image) {
                Storage::delete('uploads/' . $works->image);
            }
            $ImageName = "portfolio_works_" . time() . "." . $request->image->extension();
            $FolderPath = 'uploads/works';
            $ImagePath = $FolderPath . "/" . $ImageName;
            $request->image->move(public_path($FolderPath), $ImageName);
            $works->image = $ImagePath;
        }
        $works->name = $request->name;
        $works->type = $request->type;
        $works->client = $request->client;
        $works->languages = $request->languages;
        $works->link = $request->link;
        $works->details = $request->details;
        $works->save();
        return redirect()->route('works.show')->with('success', 'Work updated successfully');
    }
    public function destroy_works($id)
    {
        $works = AdminWorksModel::where('workid', $id)->first();
        if ($works->image) {
            Storage::delete('uploads/' . $works->image);
        }
        $works->delete();
        return redirect()->route('works.show')->with('success', 'Work deleted successfully');
    }
}
