<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        
        $footerJson = file_get_contents(public_path('json/footerData.json'));
        $footerData = json_decode($footerJson, true);
        
        $sectionsPath = public_path('json/sections.json');
        $sections = file_exists($sectionsPath) ? json_decode(file_get_contents($sectionsPath), true) : [];

        $achievementsPath = public_path('json/achievements.json');
        $achievements = file_exists($achievementsPath) ? json_decode(file_get_contents($achievementsPath), true) : [];

        
        $jsonPath = public_path('json/courses.json');
        $courses = json_decode(file_get_contents($jsonPath), true)['course'];

        $configPath = public_path('json/MyTalent.json');
        $config = json_decode(file_get_contents($configPath), true);

        $successPath = public_path('json/success.json');
        $success = file_exists($successPath) ? json_decode(file_get_contents($successPath), true):['success'];

       

       



        return view('home', compact('footerData', 'sections', 'achievements','courses','config','success'));
    }
}
