<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Models\User;

class ContactController extends Controller
{
    public function showForm()
    {
        $user = User::first();
        return view('contact', ['user'=> $user]);
    }

    public function sendEmail(Request $request)
    {
        $validated = $request->validate([
            'subject' => 'required|string|max:255',
            'date' => 'required|date',
            'details' => 'required|string',
        ]);

        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new ContactMail($validated));

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
