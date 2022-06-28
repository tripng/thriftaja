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
    
    public function update(Request $request){
        $user = User::where('id',$request->id)->first();
        if($request->alamat){
            return $user->update(['alamat' => $request->alamat]) ? redirect()->route('profile')->with('toast_success','Alamat Berhasil Diubah') : redirect()->route('profile')->with('toast_error','Alamat Tidak Dapat Diubah');
        }
        else if($request->username){
            return $user->update(['username' => $request->username]) ? redirect()->route('profile')->with('toast_success','Username Berhasil Diubah') : redirect()->route('profile')->with('toast_error','Username Tidak Dapat Diubah');
        }
        else if($request->name){
            return $user->update(['name' => $request->name]) ? redirect()->route('profile')->with('toast_success','Name Berhasil Diubah') : redirect()->route('profile')->with('toast_error','Name Tidak Dapat Diubah');
        }
        else if($request->genre){
            return $user->update(['genre' => $request->genre]) ? redirect()->route('profile')->with('toast_success','Genre Berhasil Diubah') : redirect()->route('profile')->with('toast_error','Genre Tidak Dapat Diubah');
        }
        else if($request->postcode){
            return $user->update(['kode_pos' => $request->postcode]) ? redirect()->route('profile')->with('toast_success','Kode Pos Berhasil Diubah') : redirect()->route('profile')->with('toast_error','Kode Pos Tidak Dapat Diubah');
        }
        else if($request->city){
            return $user->update(['kota' => $request->city]) ? redirect()->route('profile')->with('toast_success','City Berhasil Diubah') : redirect()->route('profile')->with('toast_error','Genre Tidak Dapat Diubah');
        }
    }
}