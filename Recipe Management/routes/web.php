<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login',[AuthController::class,"login"])->name("auth.login");
Route::post('/login',[AuthController::class,"loginPost"])->name("auth.loginPost");
Route::get('/reg',[AuthController::class,"reg"])->name("auth.reg");
Route::post('/reg',[AuthController::class,"regPost"])->name("auth.regPost");

Route::middleware("auth")->group(function(){
    Route::post('/dashboard',[AuthController::class,"destroy"])->name("auth.destroy");

    // Route::get('/dashboard', function () {
    //     return view('layouts.recipes');
    // });
    Route::get('/users', function () {
        return view('layouts.users');
    });

    Route::get("/dashboard",[RecipeController::class,"dashboard"])->name("layouts.recipes");


    Route::get("/addrecipe",[RecipeController::class,"addrecipe"])->name("layouts.addrecipe");
    Route::post("/addrecipe",[RecipeController::class,"store"])->name("layouts.store");


    Route::get("/users",[RecipeController::class,"users"])->name("layouts.users");
});


