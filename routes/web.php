<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name("home");

Route::get('/services', function () {
    return view('pages.services');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/signup', [AuthController::class, "viewSignupForm"]);
Route::post('/signup', [AuthController::class, "signup"]);

Route::get('/login', [AuthController::class, "viewLoginForm"])->name("viewLoginForm");
Route::post('/login', [AuthController::class, "login"]);
Route::get('/logout', [AuthController::class, "logout"]);

Route::get('/admin-panel', [AdminController::class, "viewDashboard"])->name("admin-panel");
