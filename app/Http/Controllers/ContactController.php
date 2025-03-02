<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    // Handle the form submission
    public function sendMessage(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        try {   
            // Send the email using the ContactMail Mailable
            Mail::to('hydrawatah123@gmail.com')->send(new ContactMail($request));

            // Redirect back to the contact section with a success message
            return redirect()->to(url('/#contact'))->with('success', 'Your message has been sent successfully!');
            } catch (\Exception $e) {
                // Redirect back to the contact section with an error message
                return redirect()->to(url('/#contact'))->with('error', 'Something went wrong. Please try again later.');
        }
    }
}