@extends('landingpage.index')
@section('content')
<div class="container">
    @foreach($transaksi as $t)
    @php
        $barang = App\Models\RincianBarang::where('order_number','=',$t->order_number)->get()->flatten();
    @endphp
        <div class="card my-3">
            @foreach($barang as $b)
            <h5 class="card-header">{{$b->barang->category->name}}</h5>
            <div class="card-body d-flex">
                <img src="{{asset('storage/image/'.$b->barang->foto)}}" class="w-100 h-100 col-3" alt="">
                <div class="isi col-6">
                    <h5 class="card-title">{{$b->barang->nama_barang}}</h5>
                    <p class="card-text">{{$t->created_at}}</p>
                </div>
                <div class="sub col-3">
                    <p>Harga : Rp. {{number_format($b->barang->harga,0,',','.')}}</p>
                    <p>Jumlah : x{{$b->amount}}</p>
                    <hr>
                    <p class="font-weight-bold">Total : Rp. {{number_format($b->price,0,',','.')}}</p>
                    <a href="{{route('detail',['barang' => $b->barang->slug])}}" class="btn btn-primary">Lihat Barang</a>
                </div>
            </div>
            @endforeach
        </div>
    @endforeach
</div>
@endsection