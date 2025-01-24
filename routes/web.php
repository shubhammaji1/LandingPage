<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\HelpController;
use App\Http\Controllers\CommunityEngagementController;
use App\Http\Controllers\ServiceDeliveryController;
use App\Http\Controllers\CapacityBuildingController;
use App\Http\Controllers\HumanitarianController;
use App\Http\Controllers\SustainabilityController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\ContactController;

Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');








Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [AboutUsController::class, 'aboutUs'])->name('about-us');
Route::get('/help-us', [HelpController::class, 'help'])->name('help-us');
Route::get('/community-engagement', [CommunityEngagementController::class, 'community'])->name('community-engagement');
Route::get('/service-delivery', [ServiceDeliveryController::class, 'serviceDelivery'])->name('service');
Route::get('/capacity-building', [CapacityBuildingController::class, 'capacity'])->name('capacity-building');
Route::get('/humanitarian-assistance', [HumanitarianController::class, 'humanitarian'])->name('humanitarian-assistance');
Route::get('/sustainable-development', [SustainabilityController::class, 'sustainability'])->name('sustainable-development');
Route::get('/privacy-policy', [PrivacyPolicyController::class, 'show'])->name('privacy.policy');
   




// Route::get('/footer', [FooterController::class, 'index']);
// Route::get('/', [PageController::class, 'index']);


