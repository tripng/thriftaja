<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Barang;
use App\Models\Transaksi;
use App\Models\RincianBarang;
use App\Models\RincianPengiriman;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class CartController extends Controller
{
    public function store(Request $request,$username){
        if (Cart::where('barang_id', '=', $request->barang_id)->exists() && Cart::where('user_id','=',$request->user_id)->exists()) {
            return redirect()->route('cart',[$username])
                        ->with('toast_error','Barang Sudah Ada Dikeranjang.');
         }
        $validate = $request->validate([
            'user_id' => 'required',
            'barang_id' => 'required',
        ]);
        Cart::create($validate);
        return redirect()->route('cart',[$username])
                        ->with('success','Barang added successfully.');
    }

    public function destroy($username,$cart){
        $c = Cart::find($cart);
        Cart::destroy($c->id);
        return redirect()->route('cart',[$username])->with('success','Barang deleted successfully');
    }

    public function transaksi(Request $request){
        $total_barang = explode(',',$request->jumlah);
        $carts = Cart::where('user_id','=',$request->id)->get();
        $barang = Barang::select('id','stok')
            ->whereIn('id',$carts->pluck('barang_id'))
            ->pluck('stok','id');

        $validate = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'detail_address' => 'required',
            'city' => 'required',
            'postcode' => 'required',
            'handphone' => 'required',
            'password' => 'required',
        ]);
        
        if(Hash::check($request->password, $request->user()->password)){
            $ordernumber = Str::upper(date('ymdHis').Str::random(3));
            foreach($carts as $cart){
                if(!isset($barang[$cart->barang_id]) || $barang[$cart->barang_id] < $cart->stok){
                    echo 'Stok Habis';
                }
            }
            // $transaksi = Transaksi::create([
                // ]);
            $validate['card_id'] = $cart->id;
            $validate['user_id'] = $request->id;
            $validate['notes'] = $request->notes;
            $validate['order_number'] = $ordernumber;
            $lastRincianPengirimanId = RincianPengiriman::insertGetId([
                'name' => $validate['name'],
                'address' => $validate['address'],
                'detail_address' => $validate['detail_address'],
                'city' => $validate['city'],
                'postcode' => $validate['postcode'],
                'handphone' => $validate['handphone'],
            ]);
            Transaksi::create([
                'user_id' => $request->id,
                'rincian_pengiriman_id' => $lastRincianPengirimanId,
                'order_number' => $ordernumber,
                'total' => $request->total_payment,
                'notes' => $validate['notes'],
            ]);
            foreach($carts as $index=>$cart){
                $validate['amount'] = $total_barang[$index];
                RincianBarang::create([
                    'barang_id' => $cart->id,
                    'order_number' => $ordernumber,
                    'amount' => $validate['amount'],
                    'price' => $cart->barang->harga*$validate['amount'],
                ]);
                Barang::find($cart->barang_id)->decrement('stok',$total_barang[$index]);
            }
            Cart::where('user_id',auth()->id())->delete();

            return view('landingpage.faktur',[
                'transaksi' => Transaksi::with('rincian_pengiriman')->where('order_number','=',$ordernumber)->first(),
                'order' => RincianBarang::where('order_number','=',$ordernumber)->get(),
            ]);
        }
    }
}