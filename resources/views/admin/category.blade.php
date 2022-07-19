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
                        <h4 class="card-title">Category Barang</h4>
                        <a href="{{{route('categories.create')}}}" type="button" class="btn btn-primary btn-sm btn-icon-text mr-3">
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
                                    <th> Nama Category </th>
                                    <th> Slug </th>
                                    <th> Jumlah Barang </th>
                                    <th> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$category->name}}</td>
                                    <td>{{$category->slug}}</td>
                                    <td>{{$category->barang->count()}}</td>
                                    {{-- <td><img src="{{asset('storage/image/'.$m->foto)}}" alt=""></td> --}}
                                    <td>
                                        <a class="btn btn-info btn-sm" href="/categories/{{$category->slug}}/edit">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                            <button class="btn btn-danger btn-sm" onclick="bokuModal({{$loop->iteration}})" title="Delete Category">
                                                <i class="bi bi-trash"> </i>
                                            </button>
                                    </td>
                                </tr>

                                <div class="bokuModal{{$loop->iteration}} shadow bg-light w-50" 
                                    style="
                                        display: none; 
                                        position: fixed;
                                        z-index:10;
                                        left: 25%;
                                        top: 25%;">
                                    <h3 class="text-center" style="margin-top: 20px;">Apakah Anda Yakin Ingin Menghapus {{$category->name}}?</h3>
                                    <div class="bokuConfirm d-flex justify-content-center">
                                        <form action="{{ route('categories.destroy',$category->slug) }}" class="d-inline" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn bg-danger shadow text-light m-3">Iya</button>
                                        </form>
                                        <button type="button" class="btn bg-info shadow m-3" onclick="bokuModalExit({{$loop->iteration}})">Tidak</button>
                                    </div>
                                </div>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="row mt-4">
                            <div class="col-lg-12">
                                {{$categories->links()}}
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
