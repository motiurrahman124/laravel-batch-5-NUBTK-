<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, "viewHomePage"])->name("home");

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
Route::get('/admin/add-course', [CourseController::class, "viewCourseForm"])->name("viewCourseForm");
Route::post('/admin/add-course', [CourseController::class, "createCourse"])->name("addCourse");
Route::get('/admin/course-list', [CourseController::class, "viewCourseList"])->name("viewCourseList");
Route::get('/admin/course-delete/{id}', [CourseController::class, "deleteCourse"])->name("deleteCourse");
