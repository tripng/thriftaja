<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Barang;
use App\Models\Transaksi;
use App\Models\RincianBarang;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use PDF;

class AdminController extends Controller
{
    public function index(){
        $user = User::latest()->paginate(10);
        $totalUser = User::all()->count();
        $total = collect();
        $testimoni = Transaksi::all()->pluck('total')->each(function($item,$index) use ($total){
            $total->push((int)str_replace('.','',substr($item,4)));
        });
        return view('admin.home',compact('user','total','totalUser'))
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