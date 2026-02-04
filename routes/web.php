<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', [HomeController::class, 'test'])->name('all-test');

// pacakges
Route::get('/packages', [HomeController::class, 'packages'])->name('packages');

// memberships
Route::get('/memberships', [HomeController::class, 'memberships'])->name('memberships');

// busienss
Route::get('/businessopportunities', [HomeController::class, 'businessopportunities'])->name('business');

// downlod
Route::get('/downloadreports', [HomeController::class, 'downloadReports'])->name('downloadreports');

// opd
Route::view('/opd', 'pages.opd')->name('opd');

// pharmacy
Route::view('/pharmacy', 'pages.pharmacy')->name('pharmacy');

// hospital
Route::view('/hospital', 'pages.hospital')->name('hospital');

// about
Route::view('/about', 'pages.about')->name('about');

// contact
Route::view('/contact', 'pages.contact')->name('contact');


// form
Route::view('/forms', 'pages.forms')->name('forms');

Route::view('/list/{type}', 'pages.listing');
Route::get('/details/tests/{slug}', function () {
    return view('pages.test-details');
});

Route::get('/details/checkups/{slug}', function () {
    return view('pages.checkup-details');
});

// LOGIN
Route::get('/login', [HomeController::class, 'login'])->name('login');
