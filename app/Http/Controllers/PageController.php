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
        $category_image = collect(['earphone1.jpg','l1squaree.jpg','l2squaree.jpg','l3squaree.jpg
        ']);
        $category = Category::with('barang')->paginate(4);
        return view('landingpage.shop',[
            'category_img' => $category_image,
            'categories' => $category,
            'barang' => Barang::with(['category','cart'])->paginate(8),
        ]);
    }
    
    public function cart(User $user){
        $cart = Cart::with('user','barang')->where('user_id','=',$user->id)->get();
        $count_barang = collect([]);
        foreach($cart as $c){
            $count_barang->push($c->barang->harga);
        }
        return view('landingpage.cart',[
            'cart' => $cart,
            'count_barang' => $count_barang,
        ]);
    }
    public function checkout(Request $request){
        $id = explode(',',$request->id);
        $harga = explode(',',$request->harga_barang);
        $quantity = explode(',',$request->quantity);
        array_pop($id);
        return view('landingpage.checkout',[
            'items' => Barang::with(['category','user','cart'])->whereIn('id',$id)->get(),
            'quantity' => collect($quantity),
            'harga' => collect($harga),
            'total' => $request->total,
        ]);
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
    public function detailBarang(Barang $barang){
        return view('landingpage.detail',[
            'barang' => $barang,
        ]);
    }
    public function profile(){
        return view('landingpage.profile');
    }
}