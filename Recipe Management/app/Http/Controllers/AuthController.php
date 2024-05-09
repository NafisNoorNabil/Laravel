<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){
        return view("auth.login");
    }

    public function loginPost(Request $request){
        $request->validate([
            "email"=>"required",
            "password"=>"required",
        ]);
        $credentials=$request->only("email","password");
        if (Auth::attempt($credentials)){
            return redirect()->intended(route("layouts.recipes"));
        }
        return redirect(route("auth.login"));
        
    }

    public function reg(){
        return view("auth.reg");
    }
    
    public function regPost(Request $request){
        $request->validate([
            "username"=>"required",
            "email"=>"required",
            "password"=>"required",
        ]);
        $user= new User();
        $user->name=$request->username;
        $user->email=$request->email;
        $user->password= Hash::make($request->password);

        if($user->save()){
            return redirect(route("auth.login"));
        }
    }
    public function dashboard(){
        return view("auth.dashboard");
    }
    public function destroy(){
        Auth::logout();
        return redirect(route("auth.login"));
    }
}
