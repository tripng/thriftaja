<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Barang;
use App\Models\Transaksi;
use App\Models\RincianBarang;
use Illuminate\Support\Facades\DB;

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
    public function pembeli(){
        $transaksi = Transaksi::latest()->paginate(10);
        $orders = collect();
        foreach($transaksi as $t){
            $order = RincianBarang::where('order_number','=',$t->order_number)->get()->flatten();
            $orders->push($order);
        }
        $barang = $orders->flatten();
        // foreach($transaksi as $index=>$t){
        //     dump($t->order_number);
        // }
        return view('admin.pembeli',compact('barang','transaksi'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}