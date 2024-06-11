<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\ContactModel;
use Illuminate\Http\Request;
use App\Mail\SendEmail;

use Mail;


class ContactController extends Controller
{
    public function index()
    {
        return view('frontend.contact');
    }

    public function contactsubmit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required | email',
            'message' => 'required'
        ]);
        $contact = new ContactModel();
        $maxID = $contact->max('id');
        $contact->id = $maxID + 1;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();
        Mail::to('maroofsultan17@gmail.com')->send(new SendEmail($request));
        return back()->withSuccess('Thanks for Contacting We\'ll Contact you ASAP!');
    }
}
