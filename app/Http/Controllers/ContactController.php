<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function message(ContactRequest $request)
    {
        Contact::create(
            [
                'fullName' => $request->input('fname'),
                'Phone' => $request->input('phone'),
                'Email' => $request->input('email'),
                'Service' => $request->input('type'),
                'Message' => $request->input('msg'),
            ]
        );
        Mail::to('castoraron255@gmail.com')->send(new ContactMail($request->all()));
        return back()->with('success', 'Thanks For '.$request->input('fname').' Contacting Chanya Change');
    }
}
