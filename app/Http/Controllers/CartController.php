<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    public function store(Request $request,$username){
        if (Cart::where('barang_id', '=', $request->barang_id)->exists()) {
            return redirect()->route('cart',[$username])
                        ->with('fail','Barang Sudah Ada Dikeranjang.');
         }
        $validate = $request->validate([
            'user_id' => 'required',
            'barang_id' => 'required',
            // 'jumlah' => 'required',
            // 'harga' => 'required',
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
}