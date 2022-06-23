@extends('admin.index')
@section('content')
    <h1>{{$barang->nama_barang}}</h1>
    <div class="content">
        <p>Kode Barang : {{$barang->kode_barang}}<p> <br>
        <p>Harga : {{$barang->harga}}<p> <br>
        <p>Stok : {{$barang->stok}}<p><br>
        <p>File : {{$barang->foto}}<p> <br>
        <p>Keterangan : {{$barang->keterangan}}<p>
    </div>
@endsection