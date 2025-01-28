<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InkindController extends Controller
{
    public function showForm()
    {
        $headerJson = file_get_contents(public_path('json/header_navigation.json'));
        $header = json_decode($headerJson, true);
        $footerJson = file_get_contents(public_path('json/footerData.json'));
        $footerData = json_decode($footerJson, true);
        $inKindData = json_decode(file_get_contents(public_path('json/inkind.json')), true)['inKindData'];
        return view('inkind', compact('inKindData','header','footerData'));
    }

    public function submitForm(Request $request)
    {
        $validatedData = $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'address' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'description' => 'required|string',
            'estimatedValue' => 'required|numeric',
            'date' => 'required|date',
            'category' => 'required|string',
            'anonymousDonation' => 'nullable|boolean'
        ]);

        // Handle the form submission (e.g., save to database or send an email)

        return redirect()->back()->with('success', 'Thank you for your donation!');
    }
}
