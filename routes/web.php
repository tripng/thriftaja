<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CartController;

Route::get('/contact', function () {
    return view('landingpage/contact');
});
// Landing Page
Route::get('/',[PageController::class,'index']);
Route::get('/home',[PageController::class,'index']);
Route::get('/shop',[PageController::class,'shop']);
Route::get('/detail',[PageController::class,'detail']);
Route::get('/checkout',[PageController::class,'checkout'])->middleware('auth');
Route::get('/category',[PageController::class,'category']);
Route::get('/allshop',[PageController::class,'allshop'])->name('allshop');

//Cart
Route::get('/cart/{user:username}',[PageController::class,'cart'])->name('cart');
Route::post('/cart/{username}',[CartController::class,'store'])->name('store-cart');
Route::get('/des-cart/{username}/{id}',[CartController::class,'destroy'])->name('des-cart');
// Route::get('/thrift/barang()',[PageController::class,'category']);

// Admin
Route::get('/admin',[AdminController::class,'index'])->middleware('admin');
Route::get('/admin/barang/{barang:slug}',[AdminController::class,'detailBarang'])->name('detail-barang')->middleware('admin');
Route::resource('/barang',BarangController::class)->middleware('admin');
Route::resource('/categories',CategoryController::class)->middleware('admin');


// Login
Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/auth',[LoginController::class,'authenticate']);
Route::get('/logout',[LoginController::class,'logout']);

// Registrasi
Route::get('/register',[RegisterController::class,'index']);
Route::post('/register',[RegisterController::class,'store']);