<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Category;
use App\Models\User;
use App\Models\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index(){
        return view ('landingpage.home',[
            // 'barang' => Barang::find(1)->testimoni,
            'barang' => Barang::with('category')->get(),
            'product_filter' => collect(['new-arrivals','hot-sales']),
        ]);
    }
    public function shop(){
        return view('landingpage.shop');
    }
    public function cart(User $user){
        $cart = Cart::with('user','barang')->where('user_id','=',$user->id)->get();
        $count_barang = 0;
        foreach($cart as $c){
            $count_barang += $c->barang->harga;
        }
        return view('landingpage.cart',[
            'cart' => $cart,
            'total' => $count_barang,
        ]);
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
    public function allshop(){
        return view('landingpage.allshop',[
            'category' => Category::with('barang')->get(),
            'barang' => Barang::with('category')->paginate(9), //->withQueryString()
        ]);
    }
    public function category(){
        $categories = Category::latest()->paginate(10);
        return view('landingpage.categories',compact('categories'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}