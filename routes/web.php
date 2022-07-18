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
use App\Http\Controllers\RatingController;
use App\Http\Controllers\ContactController;

Route::get('/contact', function () {
    return view('landingpage/contact');
})->name('kontakthriftaja');
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
    Route::get('/cart/{user:username}','cart')->name('cart')->middleware(['verified']);
    Route::get('/pesanan','pesananSaya')->name('pesanan_saya');
    Route::get('/komentar/{barang:slug}','comment')->name('comment')->middleware('auth');
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

Route::controller(GoogleController::class)->group(function (){
    Route::get('login/google','redirectToGoogle')->name('google.login');
    Route::get('login/google/callback','handleGoogleCallback')->name('google.callback');
});
Route::controller(ContactController::class)->group(function (){
    Route::post('/send-contact','sendContact')->name('send-contact');
});

Route::resource('/rating',RatingController::class)->middleware('auth');
Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');