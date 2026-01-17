<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', [HomeController::class, 'test'])->name('all-test');

// pacakges
Route::get('/packages', [HomeController::class, 'packages'])->name('packages');
