<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\RegisterController;

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

// Landing Page
Route::get('/',[PageController::class,'index']);
Route::get('/home',[PageController::class,'index']);
Route::get('/shop',[PageController::class,'shop']);
Route::get('/cart',[PageController::class,'cart']);
Route::get('/detail',[PageController::class,'detail']);



// Admin
Route::get('/admin',[AdminController::class,'index']);

// Login
Route::get('/login',[LoginController::class,'index'])->name('login');

// Registrasi
Route::get('/register',[RegisterController::class,'index']);
Route::post('/register',[RegisterController::class,'store']);

// Barang
Route::resource('/barang',BarangController::class);