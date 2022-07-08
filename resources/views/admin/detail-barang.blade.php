@extends('admin.index')
@section('content')
<div class="d-flex h-100 ml-3" style="width: 18rem;">
    <img src="{{asset('storage/image/'.$barang->foto)}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Nama Barang : {{$barang->nama_barang}}</h5>
      <p>Harga : Rp.{{ number_format($barang->harga,0,'.',',')}}</p>
      <p>Kode Barang : {{$barang->kode_barang}}</p>
      <p>Stok : {{$barang->stok}}</p>
      <p class="card-text">Keterangan :{{$barang->keterangan}}</p>
      <div class="d-flex button gap-2">
        <form action="{{ route('barang.destroy',$barang->id) }}" class="d-inline" method="POST">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger">Hapus</button>
      </form>
      <a class="btn btn-info" href="/barang/{{$barang->id}}/edit">Edit</a>
      </div>
    </div>
  </div>
@endsection