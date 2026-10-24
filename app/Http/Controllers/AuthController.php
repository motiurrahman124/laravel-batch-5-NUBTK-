<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function viewSignupForm(){
         return view('pages.register');
    }

    public function viewLoginForm(){
         return view('pages.login');
    }

    public function signup(Request $request){
        //  dd($request->email);

        $data["name"] = $request->name;
        $data["email"] = $request->email;
        $data["address"] = $request->address;
        $data["password"] = $request->password;

        User::create( $data);
    }
}
