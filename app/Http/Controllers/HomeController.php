<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function viewHomePage(){
        $courses = Course::where(["status"=>"active"])->get();

        return view('pages.home', ["data"=> $courses]);
    }
}
