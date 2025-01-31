<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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

    // Handle form submission
    public function register(Request $request)
    {
        // Validate the form data
        $request->validate([
            'user_type' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        // Store user in database
        $user = User::create([
            'user_type' => $request->user_type,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Registration successful!');
        dd($request->all());
    }
}