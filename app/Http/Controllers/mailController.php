<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\sendMail;

class mailController extends Controller
{
    public function send()
    {
        \Mail::send(new sendMail());

        return redirect()->guest('email');
    }

    public function email()
    {
        return view('email');
    }
}
