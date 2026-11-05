<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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


        if($request->file("image")){
            $file = $request->file("image");
            $name =time()."_".$file->getClientOriginalName();
            $folder = public_path("images/courses");

            File::ensureDirectoryExists($folder);

            $file->move($folder, $name);

            $data["image"] = $name;
        }

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

    public function viewCourseEditForm($id){
        $course = Course::where(["id"=> $id])->first();
        return view("pages.admin-panel.course.edit", ["course"=> $course]);
    }

    public function editCourse(Request $request){
        // dd($request->id);
        $data["title"] = $request->title;
        $data["price"] = $request->price;
        $data["duration"] = $request->duration;
        $data["short_description"] = $request->short_description;
        $data["level"] = $request->level;
        $data["status"] = $request->status;

        Course::where(["id"=> $request->id])->update($data);

        return redirect()->route("viewCourseList");
    }
}
