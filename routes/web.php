<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/services', function () {
    return view('pages.services');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/signup', [AuthController::class, "viewSignupForm"]);
Route::post('/signup', [AuthController::class, "signup"]);

Route::get('/login', [AuthController::class, "viewLoginForm"]);
