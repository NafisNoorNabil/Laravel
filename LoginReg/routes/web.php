<?php

use App\Http\Controllers\AuthController;
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


Route::get('/login',[AuthController::class,"login"])->name("loginreg.login");
Route::post('/login',[AuthController::class,"loginPost"])->name("loginreg.loginPost");

Route::get('/reg',[AuthController::class,"reg"])->name("loginreg.reg");
Route::post('/reg',[AuthController::class,"regPost"])->name("loginreg.regPost");