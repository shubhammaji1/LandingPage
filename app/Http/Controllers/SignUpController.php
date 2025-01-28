<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class SignUpController extends Controller
{
    // Display the signup page
    public function show()
    {
        // Load the JSON file
        $signUpJson = public_path('json/signup.json');
        $signUpData = json_decode(file_get_contents($signUpJson), true);

        // Render the signup view with the JSON data
        return view('signup', compact('signUpData'));
    }

    // Handle OTP generation and email sending
    public function sendOtp(Request $request)
    {
        // Validate the email
        $request->validate([
            'email' => 'required|email|unique:users,email',
        ]);

        // Generate a 6-digit OTP
        $otp = rand(100000, 999999);

        // Store the OTP and email in the session
        Session::put('otp', $otp);
        Session::put('otp_email', $request->email);

        // Send the OTP via email
        Mail::raw("Your OTP for signup is: $otp", function ($message) use ($request) {
            $message->to($request->email)
                    ->subject('Signup OTP');
        });

        return response()->json(['success' => true, 'message' => 'OTP sent successfully!']);
    }

    // Handle form submission
    public function submit(Request $request)
    {
        // Validate the request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed',
            'otp' => 'required',
        ]);

        // Check if the OTP and email match the session data
        if ($request->otp != Session::get('otp') || $request->email != Session::get('otp_email')) {
            return back()->withErrors(['otp' => 'Invalid OTP. Please try again.']);
        }

        // Create a new user
        User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Clear the OTP session data
        Session::forget(['otp', 'otp_email']);

        // Redirect to login page with a success message
        return redirect()->route('login')->with('success', 'Signup successful. Please login.');
    }
}
