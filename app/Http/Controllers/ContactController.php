<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact(ContactRequest $request)
    {
        $contact_data = [
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'timestamp' => Carbon::now('Europe/Zurich')->format("d.m.Y-H:i:s"),
            'language' => session("locale")
        ];

        Mail::to(config('mail.to.address'))->send(new ContactMail($contact_data));

        session()->flash('contact_form_success', "You have successfully sent me a message!");

        return back();
    }
}
