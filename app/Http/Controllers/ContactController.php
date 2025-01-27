<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Display the contact page
    public function index()
    {
        $headerJson = file_get_contents(public_path('json/header_navigation.json'));
        $header = json_decode($headerJson, true);
        $footerJson = file_get_contents(public_path('json/footerData.json'));
        $footerData = json_decode($footerJson, true);
        $contactJson = file_get_contents(public_path('json/contactUs.json'));
        $contact = json_decode($contactJson, true);
        return view('contact',compact('contact','header','footerData'));
    }

    // Handle form submission
    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
            'terms' => 'accepted'
        ]);

        // Save or process the form data (e.g., send an email)
        // For now, just return a success message
        return response()->json(['message' => 'Thank you for contacting us! We will get back to you soon.']);
    }
}
