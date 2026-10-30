<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        return redirect()->route("viewLoginForm");
    }

    public function login(Request $data ){

        if(Auth::attempt(["email"=>$data->email, "password"=>$data->password])){
            if(Auth::user()->isAdmin == 1){
                return redirect()->route("admin-panel");
            }else{
                return redirect()->route("home");
            }
        }else{
            dd("Invalid Credentials!!");
        }
    }

    public function logout(){
        Auth::logout();

        return redirect()->route("viewLoginForm");
    }
}
