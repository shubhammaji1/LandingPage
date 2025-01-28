<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OtpController extends Controller
{
    public function sendEmailOtp(Request $request)
    {
        // Validate the email input
        $request->validate([
            'email' => 'required|email',
        ]);

        $email = $request->email;

        // Generate a random OTP
        $otp = rand(100000, 999999);

        // Store the OTP in the session or database
        session(['email_otp' => $otp]);

        // Send OTP via email
        Mail::raw("Your OTP is: $otp", function ($message) use ($email) {
            $message->to($email)
                ->subject('Your OTP Code');
        });

        return response()->json([
            'success' => true,
            'message' => 'OTP sent successfully to your email.',
        ]);
    }
}
