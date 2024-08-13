<?php

namespace App\Http\Controllers;

use App\Models\Community;
use App\Mail\CommunityMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\CommunityRequest;


class CommunityController extends Controller
{
    public function join(CommunityRequest $request){
        Community::create($request->validated());
        Mail::to(['pamsekela@gmail.com', 'info@chanyachange.org'])->send(new CommunityMail($request->all()));
        return back()->with('success', 'Thank you for joining us');
    }
}
