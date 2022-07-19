<?php

use App\Http\Controllers\ApiBarangsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\UserCollection;
use App\Models\User;
use App\Models\Barang;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(ApiBarangsController::class)->group(function (){
    Route::get('/barangs','index');
    Route::get('/barangs/{id}','show');
    Route::get('/users','indexUser');
    Route::get('/users/{id}','showUser');
    Route::get('/comments','indexComment');
    Route::get('/comments/{id}','showComment');
});