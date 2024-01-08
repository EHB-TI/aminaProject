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
            'full_name' => $request->input('full_name'),
            'email' => $request->input('email'),
            'phone_number' => $request->input('phone_number'),
            'message' => $request->input('message'),
        ];
    
        \Mail::to('lashesbyamina@hotmail.com')->send(new ContactMail($details));
    
        return back()->with('success', 'Je bericht is verzonden.');
    }
}
