<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{
    private string $contact_path = "contacts/";

    public function contact(ContactRequest $request){
        $filename = $this->contact_path.Carbon::now('Europe/Zurich')->format("Y_m_d-H_i_s").".txt";

        Storage::disk('local')->put(
            $filename,
            "Email:".$request->email."\nSubject:".$request->subject."\nLanguage:".session("locale")."\nMessage:".$request->message
        );

        session()->flash('contact_form_success', "You have successfully sent me a message!");

        return back();
    }
}
