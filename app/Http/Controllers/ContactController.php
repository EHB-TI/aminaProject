<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $details = [
            'name' => $request->input('Full Name'),
            'email' => $request->input('Email'),
            'message' => $request->input('Message')
        ];

        Mail::to('lashesbyamina@hotmail.com')->send(new ContactMail($details));

        return back()->with('success', 'Je bericht is verzonden!');
    }
}
