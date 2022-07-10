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
use App\Http\Controllers\GoogleController;

Route::get('/contact', function () {
    return view('landingpage/contact');
});
// Landing Page
Route::controller(PageController::class)->group(function (){
    Route::get('/','index');
    Route::get('/home','index');
    Route::get('/shop','shop');
    // Route::post('/checkout/{user:username}','checkout')->middleware('auth')->name('checkout');
    Route::get('/checkout/{user:username}','checkout')->middleware('auth')->name('checkout');
    Route::get('/category','category');
    Route::get('/allshop','allshop')->name('allshop');
    Route::get('/shop/{barang:slug}','detailBarang')->name('detail');
    Route::get('/profile','profile')->name('profile')->middleware('auth');
    Route::post('/setting','update')->name('setting');
    Route::get('/cart/{user:username}','cart')->name('cart');
    Route::get('/pesanan','pesananSaya')->name('pesanan_saya');
});

Route::controller(CartController::class)->group(function (){
    Route::post('/cart/{username}','store')->name('store-cart');
    Route::get('/des-cart/{username}/{id}','destroy')->name('des-cart');
    Route::post('/transaksi','transaksi')->name('buy')->middleware('auth');
    Route::post('batal-transaksi/{barang:slug}','cancel')->name('cancel')->middleware('auth');
});
// Route::get('/thrift/barang()',[PageController::class,'category']);

// Admin
Route::controller(AdminController::class)->group(function (){
    Route::get('/admin','index')->middleware('admin');
    Route::get('/admin/barang/{barang:slug}','detailBarang')->name('detail-barang')->middleware('admin');
    Route::get('/pembeli','pembeli')->name('pembeli')->middleware('admin');
    Route::get('/penjualan','penjualan')->name('penjualan')->middleware('admin');
});

Route::resource('/barang',BarangController::class)->middleware('admin');
Route::resource('/categories',CategoryController::class)->middleware('admin');

Route::controller(LoginController::class)->group(function (){
    Route::get('/login','index')->name('login')->middleware('guest');
    Route::post('/auth','authenticate');
    Route::get('/logout','logout');
    Route::get('/resetpassword','resetPassword')->name('resetpassword')->middleware('guest');
});

Route::controller(RegisterController::class)->group(function (){
    Route::get('/register','index');
    Route::post('/register','store')->name('registrasi');
});

Route::controller(GoogleController::class)->group(function (){
    Route::get('auth/google','redirectToGoogle')->name('google.login');
    Route::get('auth/google/callback','handleGoogleCallback')->name('google.callback');
});