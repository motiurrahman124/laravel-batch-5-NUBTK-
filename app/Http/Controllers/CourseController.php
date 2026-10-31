<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function viewCourseForm(){
        return view("pages.admin-panel.course.create");
    }

    public function createCourse(Request $request){
        // dd($request->all());

        $data["title"] = $request->title;
        $data["price"] = $request->price;
        $data["duration"] = $request->duration;
        $data["short_description"] = $request->short_description;
        $data["level"] = $request->level;
        $data["status"] = $request->status;

        Course::create($data);

        return redirect()->route("viewCourseList");
    }

    public function viewCourseList(){
        $courses = Course::get();

        // dd($courses);
        return view("pages.admin-panel.course.list", ["data"=> $courses]);
    }

    public function deleteCourse($id){
        // dd($id);
        Course::where(["id"=> $id])->delete();

        return redirect()->back();
    }
}
