@extends('admin.index')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Form Edit Barang</h4>
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
                    <form action="{{ route('barang.update',$barang->id) }}"  method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Kode Barang</label>
                            <div class="col-sm-9">
                                <input type="text" name="kode_barang" value="{{ $barang->kode_barang }}" class="form-control" placeholder="Kode Barang">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama Barang</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_barang" value="{{ $barang->nama_barang }}" class="form-control" placeholder="Nama Barang">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Kategori</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="category_id">
                                    @foreach($categories as $category)
                                    <option @if($barang->category_id == $category->id) {{'selected'}} @else {{''}} @endif value="{{ $category->id }}" class="text-dark">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Harga</label>
                            <div class="col-sm-9">
                                <input type="number" name="harga" value="{{ $barang->harga }}" class="form-control" placeholder="Harga Barang">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Stok</label>
                            <div class="col-sm-9">
                                <input type="text" name="stok" value="{{ $barang->stok }}" class="form-control" placeholder="Stok">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Foto</label>
                            <div class="col-sm-9">
                                <img src="{{asset('storage/image/'.$barang->foto)}}" style="width:50%;" alt="">
                                <input type="file" class="form-control" name="foto" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 mt-4 col-form-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input id="x" type="hidden" value="{{$barang->keterangan}}" name="keterangan">
                                <trix-editor input="x"></trix-editor>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <div class="d-flex justify-content-between ">
                                <a class="btn btn-success" href="{{ route('barang.index') }}"> <- Kembali</a>
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

