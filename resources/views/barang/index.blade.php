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
                        <a href="{{{route('barang.create')}}}" type="button" class="btn btn-primary btn-sm btn-icon-text d-flex gap-2"><i class="bi bi-plus-square"></i>Tambah
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
                                    <th> Nama Barang </th>
                                  {{--  <th> Kategori Barang </th> --}}
                                    <th> Kategori </th>
                                    <th> Harga </th>
                                    <th> Stok </th>
                                    {{--  <th> Keterangan </th> --}}
                                    <th> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($barangs as $m)
                                <tr>
                                    <td> {{ ++$i }}</td>
                                    <td> {{ $m->nama_barang}}</td>
                                    <td> {{ $m->category->name}}</td>
                                    <td>Rp.{{ number_format($m->harga,0,'.',',')}}</td>
                                    <td>{{ $m->stok}}</td>
                                    {{-- <td><img src="{{asset('storage/image/'.$m->foto)}}" alt=""></td> --}}
                                    <td>
                                        <a href="{{route('detail-barang',['barang' => $m->slug ])}}" class="btn btn-sm btn-info" ><i class="bi bi-eye"></i></a>
                                        <a href="/barang/{{$m->id}}/edit" class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i></a>
                                        <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal"><i class="bi bi-trash"> </i></button>
                                        {{-- <a class="btn btn-info btn-sm" href="/barang/{{$m->id}}/edit">
                                            Edit<i class="bi bi-eye"></i>
                                        </a> --}}
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

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          {{-- <form action="{{ route('barang.destroy',$m->id) }}" class="d-inline" method="POST"> --}}
            {{-- @csrf --}}
            {{-- @method('DELETE') --}}
          <button type="button" class="btn btn-primary">Hapus</button>
          {{-- </form> --}}
        </div>
      </div>
    </div>
  </div>
@endsection
