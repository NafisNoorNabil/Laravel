<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\OrderitemsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\OrdersController;
use App\Models\Invoices;

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



Route::get('/products',[ProductsController::class,"products"])->name("invoice.products");
Route::get('/products/{productId}/buynow',[ProductsController::class,"buynow"])->name("invoice.buynow");
Route::post('/product/store', [ProductsController::class,"store"])->name('invoice.store');
Route::get('/invoices',[InvoiceController::class,"invoices"])->name("invoice.invoices");