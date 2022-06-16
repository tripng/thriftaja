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
                        <h4 class="card-title">Data Barang</h4>
                        <a href="{{route('barang.create')}}" type="button" class="btn btn-primary btn-sm btn-icon-text mr-3">
                            Tambah
                            <i class="typcn typcn-plus btn-icon-append"></i>
                        </a>
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
                                    <th> Kode Barang </th>
                                    <th> Nama Barang </th>
                                  {{--  <th> Kategori Barang </th> --}}
                                    <th> Harga </th>
                                    <th> Stok </th>
                                    <th> Foto </th>
                                    {{--  <th> Keterangan </th> --}}
                                    <th> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($barangs as $m)
                                <tr>
                                    <td> {{ ++$i }}</td>
                                    <td>{{ $m->kode_barang}}</td>
                                    <td> {{ $m->nama_barang}}</td>
                                  {{--  <td> </td>--}}
                                    <td>Rp.{{ number_format($m->harga,0,'.',',')}}</td>
                                    <td>{{ $m->stok}}</td>
                                    <td><img src="{{asset('storage/image/'.$m->foto)}}" alt=""></td>
                                   {{--  <td>{{ $m->keterangan}}</td> --}}
                                    <td>
                                        <a class="btn btn-info" href="/barang/{{$m->id}}/edit">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        {{-- <a class="btn btn-primary" href="{{ route('barang.edit',$m->id) }}">
                                            <i class="bi bi-pencil-square"> </i>
                                        </a> --}}
                                        <form action="{{ route('barang.destroy',$m->id) }}" class="d-inline" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" onclick="return confirm('Anda Yakin Data dihapus??')" title="Hapus Data Mahasiswa">
                                                <i class="bi bi-trash3-fill"></i>
                                            </button>
                                        </form>
                                    </td>
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
