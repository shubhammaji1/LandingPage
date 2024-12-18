<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutUsController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [AboutUsController::class, 'aboutUs'])->name('about-us');


   




// Route::get('/footer', [FooterController::class, 'index']);
// Route::get('/', [PageController::class, 'index']);


