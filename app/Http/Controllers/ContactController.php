<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'fname' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'required|string|email|max:255',
            'type' => 'required|string|max:255',
            'msg' => 'required|string',
        ]);

        Contact::create([
            'fname' => $request->fname,
            'phone' => $request->phone,
            'email' => $request->email,
            'type' => $request->type,
            'msg' => $request->msg,
        ]);

        return back()->with('success', 'Thanks you for Contacting Chanya Change!');
    }
}
