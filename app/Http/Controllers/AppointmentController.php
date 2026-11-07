<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    public function makeAppointment(Request $value){
        $data["name"] = $value->name;
        $data["email"] = $value->email;
        $data["car_type"] = $value->car_type;
        $data["course_id"] = $value->course;
        $data["message"] = $value->message;
        $data["user_id"] = Auth::user()->id;

        Booking::create($data);

        dd("Booking Success");
    }

    public function allBookings(){
        $bookings = Booking::with(["course", "user"])->get();
        return view("pages.admin-panel.bookings.list", ["bookings" => $bookings]);
    }

    public function approveBooking($id){
        $data["status"] = "approved";
        Booking::where(["id"=> $id])->update($data);

        return redirect()->back();
    }

    public function rejectBooking($id){
        $data["status"] = "rejected";
        Booking::where(["id"=> $id])->update($data);

        return redirect()->back();
    }
}
