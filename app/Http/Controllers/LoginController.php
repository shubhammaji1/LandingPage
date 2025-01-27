<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        // Load the default active type from a JSON file or set a default
        $jsonFile = public_path('json/user_types.json');
        $activeType = json_decode(file_get_contents($jsonFile), true)['default'] ?? 'Student';

        return view('login', compact('activeType'));
    }

    public function setUserType(Request $request)
    {
        $userType = $request->input('type');

        // Save the selected user type to a JSON file
        $jsonFile = public_path('json/user_types.json');
        file_put_contents($jsonFile, json_encode(['default' => $userType]));

        return response()->json(['status' => 'success', 'type' => $userType]);
    }
}
