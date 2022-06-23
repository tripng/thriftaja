<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Category;
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
    public function shop(){
        return view('landingpage.shop');
    }
    public function cart(){
        return view('landingpage.cart');
    }
    public function detail(){
        return view('landingpage.detail');
    }
    public function checkout(){
        return view('landingpage.checkout');
    }
    public function product(){
        return view('landingpage.product');
    }
    public function category(){
        $categories = Category::latest()->paginate(10);
        return view('landingpage.categories',compact('categories'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}