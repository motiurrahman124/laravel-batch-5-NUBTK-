<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function viewCourseForm(){
        return view("pages.admin-panel.course.create");
    }
}
