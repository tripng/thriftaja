<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Testimoni;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index(){
        
        return view('landingpage.home',[
            // 'barang' => Barang::find(1)->testimoni, 
            'barang' => Barang::all(), 
            'product_filter' => collect(['new-arrivals','hot-sales']),
        ]);
    }
}