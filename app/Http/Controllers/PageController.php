<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Category;
use App\Models\User;
use App\Models\Cart;
use App\Models\Transaksi;
use App\Models\RincianBarang;
use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;

class PageController extends Controller
{
    public function index(){
        $barang = Barang::with('category','testimoni')->get();
        return view ('landingpage.home',[
            // 'barang' => Barang::find(1)->testimoni,
            'barang' => $barang,
            'product_filter' => collect(['new-arrivals','hot-sales']),
            // 'testimoni' => Testimoni::with('barang','user')->get(),
        ]);
    }

    public function shop(){
        $category_image = collect(['earphone1.jpg','l1squaree.jpg','l2squaree.jpg','l3squaree.jpg
        ']);
        $category = Category::with('barang')->paginate(4);
        return view('landingpage.shop',[
            'category_img' => $category_image,
            'categories' => $category,
            'barang' => Barang::with(['category','cart','testimoni'])->paginate(8),
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
    public function checkout(Request $request,$username){
        $user = User::where('username','=',$username)->first();
        if($user->genre==null || $user->email==null){
            return redirect()->route('profile')->with('toast_info','Lengkapi Profile Terlebih Dahulu');
        }
        $preg = preg_replace('/([a-z])|(\.)/i','',$request->total);
        if((float)$user->payaja <= (float)Str::squish($preg)){
            return redirect()->route('cart',['user' => $user->username])->with('info','Uang Anda Tidak Cukup');
        }
        
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
            'barang' => Barang::latest()->with('category')->filter(request(['search','category','price']))->paginate(9), //->withQueryString()
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
            'penilaian' => Testimoni::where('barang_id','=',$barang->id)->get(),
            'related' => Barang::where('category_id','=',$barang->category_id)->whereNot('slug','=',$barang->slug)->paginate(4),
        ]);
    }
    public function profile(){
        return view('landingpage.profile');
    }
    
    public function update(Request $request){
        $user = User::where('id',auth()->user()->id)->first();
        if($request->alamat){
            return $user->update(['alamat' => $request->alamat]) ? redirect()->route('profile')->with('toast_success','Alamat Berhasil Diubah') : redirect()->route('profile')->with('toast_error','Alamat Tidak Dapat Diubah');
        }
        if($request->no){
            return $user->update(['no' => $request->no]) ? redirect()->route('profile')->with('toast_success','Alamat Berhasil Diubah') : redirect()->route('profile')->with('toast_error','Alamat Tidak Dapat Diubah');
        }
        else if($request->username){
            return $user->update(['username' => $request->username]) ? redirect()->route('profile')->with('toast_success','Username Berhasil Diubah') : redirect()->route('profile')->with('toast_error','Username Tidak Dapat Diubah');
        }
        else if($request->name){
            return $user->update(['name' => $request->name]) ? redirect()->route('profile')->with('toast_success','Name Berhasil Diubah') : redirect()->route('profile')->with('toast_error','Name Tidak Dapat Diubah');
        }
        else if($request->gender){
            return $user->update(['gender' => $request->gender]) ? redirect()->route('profile')->with('toast_success','Gender Berhasil Diubah') : redirect()->route('profile')->with('toast_error','Gender Tidak Dapat Diubah');
        }
        else if($request->postcode){
            return $user->update(['kode_pos' => $request->postcode]) ? redirect()->route('profile')->with('toast_success','Kode Pos Berhasil Diubah') : redirect()->route('profile')->with('toast_error','Kode Pos Tidak Dapat Diubah');
        }
        else if($request->kota){
            return $user->update(['kota' => $request->kota]) ? redirect()->route('profile')->with('toast_success','City Berhasil Diubah') : redirect()->route('profile')->with('toast_error','Genre Tidak Dapat Diubah');
        }
        else if($request->foto){
            $foto_profile = $request->file('foto')->getClientOriginalName();
            $request->file('foto')->storePubliclyAs('profile',$request->file('foto')->getClientOriginalName(),'public');

            return $user->update(['foto' => $foto_profile]) ? redirect()->route('profile')->with('toast_success','Foto Berhasil Diubah') : redirect()->route('profile')->with('toast_error','Foto Gagal Diubah');
        }
    }

    public function pesananSaya(){
        $transaksi = Transaksi::where('user_id','=',auth()->user()->id)->latest()->get();
        $orders = collect();
        foreach($transaksi as $t){
            $order = RincianBarang::where('order_number','=',$t->order_number)->get()->flatten();
            $orders->push($order);
        }
        $barang = $orders->flatten();
        // foreach($transaksi as $index=>$t){
            // }
            // if(Carbon::create(auth()->user()->created_at)->addMinutes(15) > now()){
        return view('landingpage.order',[
            'transaksi' => $transaksi,
        ])->with('i', (request()->input('page', 1) - 1) * 5);
        
    }
    public function comment(Barang $barang){
        return view('landingpage.comment',[
            'barang' => $barang,
        ]);
    }
}