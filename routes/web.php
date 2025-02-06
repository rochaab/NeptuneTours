<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('landing'); // Assuming your landing page view is named 'landing'
})->name('landing');

Route::get('/tours', function () {
    return view('tours');
})->name('tours');

Route::post('/contact', [ContactController::class, 'sendMessage'])->name('contact.send');

Route::get('/map', function () {
    return view('map');
});

Route::get('/about', function () {
    return view('about');
});              