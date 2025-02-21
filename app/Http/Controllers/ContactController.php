<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendContactForm(Request $request)
    {
        // Initialize or increment the session counter
        $contactFormSubmissions = $request->session()->get('contact_form_submissions', 0);
        $request->session()->put('contact_form_submissions', $contactFormSubmissions + 1);

        // Check if the user has exceeded the limit
        if ($request->session()->get('contact_form_submissions') > 10) {
            return response()->json(['message' => 'We apologize, but the owl is tired and can only deliver a certain amount of mails.'], 429);
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        $data = $request->only('name', 'email', 'message');

        Mail::to(config('mail.from.address'))->send(new ContactFormMail($data));

        return response()->json(['message' => 'Email sent successfully!']);
    }
}
