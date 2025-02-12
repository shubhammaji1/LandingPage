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
use App\Http\Controllers\LoginController;
use App\Http\Controllers\InkindController;
use App\Http\Controllers\MonetaryDonationController;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\OtpController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TermsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;



Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
});
Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');




Route::get('/terms-and-conditions', [TermsController::class, 'index']);


Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');

Route::post('/send-email-otp', [OtpController::class, 'sendEmailOtp'])->name('send.email.otp');
// Show the signup form
Route::get('/signUp', [SignUpController::class, 'show'])->name('signup.show');
// Submit the signup form
Route::post('/signup', [SignUpController::class, 'register'])->name('register');










Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/about-us', [AboutUsController::class, 'aboutUs'])->name('about-us');
Route::get('/help-us', [HelpController::class, 'help'])->name('help-us');
Route::get('/community-engagement', [CommunityEngagementController::class, 'community'])->name('community-engagement');
Route::get('/service-delivery', [ServiceDeliveryController::class, 'serviceDelivery'])->name('service');
Route::get('/capacity-building', [CapacityBuildingController::class, 'capacity'])->name('capacity-building');
Route::get('/humanitarian-assistance', [HumanitarianController::class, 'humanitarian'])->name('humanitarian-assistance');
Route::get('/sustainable-development', [SustainabilityController::class, 'sustainability'])->name('sustainable-development');
Route::get('/privacy-policy', [PrivacyPolicyController::class, 'show'])->name('privacy.policy');
Route::get('/monetary-donation', [MonetaryDonationController::class, 'showForm'])->name('monetary.form');
Route::post('/monetary-donation', [MonetaryDonationController::class, 'submitForm'])->name('monetary.submit');
Route::get('/inkind', [InkindController::class, 'showForm'])->name('donation.form');
Route::post('/inkind-donation/submit', [InkindController::class, 'submitForm'])->name('donation.submit');
Route::get('/volunteering', [VolunteerController::class, 'create'])->name('volunteer.create');
Route::post('/volunteering', [VolunteerController::class, 'store'])->name('volunteer.store');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact-us/submit', [ContactController::class, 'submit'])->name('contact.submit');
Route::post('/login', [LoginController::class, 'login_post'])->name('login_post');
Route::post('/logout', function () {
    Auth::logout();
    session()->invalidate(); 
    session()->regenerateToken(); 
    return redirect('/')->with('success', 'Logged out successfully');
})->name('logout');




