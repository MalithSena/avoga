<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Inquiry;
use Mail;


class MailController extends Controller
{
    public function sendOfferMail(Request $request)
    {
        $destination = 'inquiries@avogaholidays.com';
        $request->validate([
            'email' => 'required|email',
            'name' => 'required',
            'subject' => 'required',
            'message' => 'required'

        ]);
        $inquiry = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message')
        ];

        Mail::to($destination)->send(new Inquiry($inquiry));

        // return redirect(route('success'));
        return redirect('/contact')->with('message', 'Email Sent');
         
    }
}
