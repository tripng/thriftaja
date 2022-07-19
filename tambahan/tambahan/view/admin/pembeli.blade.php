@extends('admin.index')
@section('content')
<div class="main-panel">
    <div class="page-header">
        <h3 class="page-title">
          <span class="page-title-icon bg-gradient-primary text-white me-2">
            <i class="mdi mdi-home"></i>
          </span> Dashboard
        </h3>
        <nav aria-label="breadcrumb">
          <ul class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">
              <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
            </li>
          </ul>
        </nav>
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between my-3">
                        <h4 class="card-title">Data Pembeli</h4>
                         <a href="{{{route('exportpd')}}}" type="button" class="btn btn-primary btn-sm btn-icon-text d-flex gap-2"><i class="bi bi-plus-square"></i>export pdf
                        </a>
                        <form action="/pembeli" method="GET">  
                        
                        <input type="search" name="search">
                        </form>
                    </div>
                    <div class="table-responsive">
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                        @endif
                        <br />
                        <table class="table">
                            <thead>
                                <tr>
                                    <th> No </th>
                                    <th> Nama Pembeli </th>
                                  {{--  <th> Kategori Barang </th> --}}
                                    <th> Waktu </th>
                                    <th> Total Harga </th>
                                    <th> Catatan </th>
                                    <th> Barang Pesanan</th>
                                    <th> No Pesanan </th>
                                    {{--  <th> Keterangan </th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($transaksi as $t)
                                @php
                                    $namabarang = App\Models\RincianBarang::where('order_number','=',$t->order_number)->get()->flatten();
                                @endphp
                                <tr>
                                    <td> {{ $loop->iteration }}</td>
                                    <td> {{ $t->user->name}}</td>
                                    <td> {{ $t->created_at}}</td>
                                    <td>{{$t->total}}</td>
                                    <td>{{ $t->notes}}</td>
                                    <td>
                                        @foreach($namabarang as $s)
                                            {{$s->barang->nama_barang}} <br><br>
                                        @endforeach
                                    </td>
                                    <td>{{ $t->order_number}}</td>
                                    {{-- <td><img src="{{asset('storage/image/'.$m->foto)}}" alt=""></td> --}}
                                    {{-- <td>
                                        <a href="{{route('detail-barang',['barang' => $m->slug ])}}" class="btn btn-sm btn-info" >Detail</a> --}}
                                        {{-- <a class="btn btn-info btn-sm" href="/barang/{{$m->id}}/edit">
                                            Edit<i class="bi bi-eye"></i>
                                        </a> --}}
                                        {{-- <form action="{{ route('barang.destroy',$m->id) }}" class="d-inline" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin Data dihapus??')" title="Hapus Data Mahasiswa">
                                                Hapus<i class="bi bi-trash"> </i>
                                            </button>
                                        </form> --}}
                                    {{-- </td> --}}
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
