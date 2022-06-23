<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Barang;

class AdminController extends Controller
{
    public function index(){
        return view('admin.home',[
            'user' => User::all(),
        ]);
    }
    public function detailBarang(Barang $barang){
        return view('admin.detail-barang',[
            'barang' => $barang 
        ]);
    }
}