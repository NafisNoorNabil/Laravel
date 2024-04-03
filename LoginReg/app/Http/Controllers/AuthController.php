<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view("loginreg.login");
    }

    public function loginPost(Request $request){
        $request->validate([
            "email"=>"required",
            "password"=>"required",
        ]);
    }
    public function reg(){
        return view("loginreg.reg");
    }
    public function regPost(Request $request){
        $request->validate([
            "username"=>"required",
            "email"=>"required",
            "password"=>"required",
        ]);
    }

}
