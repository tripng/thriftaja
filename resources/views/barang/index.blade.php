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
                        <div class="tombol d-flex">
                            <a href="{{route('barang.create')}}" type="button" class="btn mx-3 btn-primary btn-sm btn-icon-text d-flex gap-2"><i class="bi bi-plus-square"></i>Tambah
                            </a>
                            <a href="/exportpdf" type="button" class="btn btn-primary btn-sm btn-icon-text d-flex gap-2"><i class="bi bi-plus-square"></i>export pdf
                            </a>
                        </div>
                        {{-- <form action="/barang" method="GET">  
                        
                        <input type="search" name="search">
                        </form> --}}
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
                                    <td> {{ $loop->iteration }}</td>
                                    <td> {{ Str::words($m->nama_barang,3)}}</td>
                                    <td> {{ $m->category->name}}</td>
                                    <td>Rp {{ number_format($m->harga,0,',','.')}}</td>
                                    <td>{{ $m->stok}}</td>
                                    {{-- <td><img src="{{asset('storage/image/'.$m->foto)}}" alt=""></td> --}}
                                    <td>
                                        <a href="{{route('detail-barang',['barang' => $m->slug ])}}" class="btn btn-sm btn-info" ><i class="bi bi-eye"></i></a>
                                        <a href="/barang/{{$m->id}}/edit" class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i></a>
                                        <button type="button" class="btn btn-sm btn-danger" onclick="bokuModal({{$loop->iteration}})"><i class="bi bi-trash"> </i></button>
                                        {{-- <a class="btn btn-info btn-sm" href="/barang/{{$m->id}}/edit">
                                            Edit<i class="bi bi-eye"></i>
                                        </a> --}}
                                    </td>
                                </tr>

                                <div class="bokuModal{{$loop->iteration}} shadow bg-light w-50" 
                                    style="
                                        display: none; 
                                        position: fixed;
                                        z-index:10;
                                        left: 25%;
                                        top: 25%;">
                                    <h3 class="text-center" style="margin-top: 20px;">Apakah Anda Yakin Ingin Menghapus {{$m->nama_barang}}?</h3>
                                    <div class="bokuConfirm d-flex justify-content-center">
                                        <form action="{{ route('barang.destroy',$m->id) }}" class="d-inline" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger shadow text-light m-3">Hapus</button>
                                        </form>
                                        <button type="button" class="btn bg-info shadow m-3" onclick="bokuModalExit({{$loop->iteration}})">Tidak</button>
                                    </div>
                                </div>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="row mt-4">
                            <div class="col-lg-12">
                                {{$barangs->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    function bokuModal(iteration){
        const bokuModal = document.querySelector('.bokuModal'+(iteration).toString());
        bokuModal.style.display = 'block'
    }
    function bokuModalExit(iteration){
        const bokuModal = document.querySelector('.bokuModal'+(iteration).toString());
        bokuModal.style.display = 'none' 
    }
</script>
@endsection

