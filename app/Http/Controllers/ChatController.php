<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Mail\ChatMail;
use App\Http\Requests\ChatRequest;
use Illuminate\Support\Facades\Mail;

class ChatController extends Controller
{
    public  function chat(ChatRequest $request){
        Chat::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'message' => $request->input('msg'),
        ]);
        Mail::to(['pamsekela@gmail.com', 'info@chanyachange.org'])->send(new ChatMail($request->all()));

        return back()->with('success', 'You information has been submitted');
    }
}
