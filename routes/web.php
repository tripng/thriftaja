<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\CategoryController;


// Landing Page
Route::get('/',[PageController::class,'index']);
Route::get('/home',[PageController::class,'index']);
Route::get('/shop',[PageController::class,'shop']);
Route::get('/cart',[PageController::class,'cart']);
Route::get('/detail',[PageController::class,'detail']);
Route::get('/categories',[PageController::class,'categories']);
Route::get('/product',[PageController::class,'product']);
Route::get('/checkout',[PageController::class,'checkout'])->middleware('auth');
Route::get('/category',[PageController::class,'category']);
// Route::get('/thrift/barang()',[PageController::class,'category']);

// Admin
Route::get('/admin',[AdminController::class,'index'])->middleware('admin');
Route::get('/admin/barang/{barang:slug}',[AdminController::class,'detailBarang'])->name('detail-barang')->middleware('admin');
Route::resource('/barang',BarangController::class)->middleware('admin');
Route::resource('/categories',CategoryController::class)->middleware('admin');

//Route::get('/product', function () { return view('product.index'); });

// Admin
Route::get('/admin',[AdminController::class,'index'])->middleware('admin');
Route::resource('/barang',BarangController::class)->middleware('admin');
Route::resource('/pembeli',PembeliController::class)->middleware('admin');

Route::get('/kategori', function () {
    return view('barang.kategori');
});

// Login
Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/auth',[LoginController::class,'authenticate']);
Route::get('/logout',[LoginController::class,'logout']);

// Registrasi
Route::get('/register',[RegisterController::class,'index']);
Route::post('/register',[RegisterController::class,'store']);