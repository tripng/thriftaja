@extends('admin.index')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Form Edit Category</h4>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="{{ route('categories.update',$category->slug) }}"  method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama Category</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" value="{{ $category->name }}" class="form-control" placeholder="Nama Barang">
                                <input type="hidden" name="slug">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <div class="d-flex justify-content-between ">
                                <a class="btn btn-success" href="{{ route('categories.index') }}"> <- Kembali</a>
                                <button type="submit" class="btn btn-primary">Ubah</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
