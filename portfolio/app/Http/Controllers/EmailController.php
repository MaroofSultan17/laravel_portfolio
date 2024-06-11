<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use Illuminate\Http\Request;
use Mail;

class EmailController extends Controller
{
    public function sendemail(){
        // $toEmail = "portfolio.maroofsultan@gmail.com";
        // $message = "We\'ll contact you ASAP.";
        // $subject = "Subject Change krna hai";

        // Mail::to($toEmail)->send(new SendEmail($message, $subject));
    }
}
