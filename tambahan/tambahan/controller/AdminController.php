<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Barang;
use App\Models\Transaksi;
use App\Models\RincianBarang;
use Illuminate\Support\Facades\DB;
use PDF;

class AdminController extends Controller
{
    public function index(){
        $user = User::latest()->paginate(10);
        return view('admin.home',compact('user'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
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
     public function exportpd(){
        $data = Transaksi::all();
        view()->share('data',$data);
        $pdf = PDF::loadview('datapembeli-pdf');
        return $pdf->download('data.pdf');
    }
}