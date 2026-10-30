<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function viewDashboard(){
        return view("pages.admin-panel.admin-dashboard");
    }
}
