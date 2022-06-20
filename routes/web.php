<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

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

Route::view('/','Include.layout');

//CUSTOMER INDEX
Route::get('/customer/index',[CustomerController::class,'index'])->name('customer.index');

//CUSTOMER CREATE
Route::get('/customer/create',[CustomerController::class,'create'])->name('customer.create');

//ADD CUSTOMER
Route::post('/customer/store',[CustomerController::class,'store'])->name('customer.store');
//CUSTOMER DATATABLE
Route::get('/customer/datatable',[CustomerController::class,'datatable'])->name('customer.datatable');

// CUSTOMER AJAX
Route::get('/customer/ajax',[CustomerController::class,'ajax'])->name('customer.ajax');




