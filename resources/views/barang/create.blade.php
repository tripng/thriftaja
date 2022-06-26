@extends('admin.index')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Form Input Barang</h4>
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
                    <form action="/barang" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Kode Barang</label>
                            <div class="col-sm-9">
                                <input type="text" name="kode_barang" class="form-control" placeholder="Kode Barang">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama Barang</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label cl\ass="col-sm-3 col-form-label">Harga</label>
                            <div class="col-sm-9">
                                <input type="number" name="harga" class="form-control" placeholder="Harga Barang">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Stok</label>
                            <div class="col-sm-9">
                                <input type="text" name="stok" class="form-control" placeholder="Stok">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Foto</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" name="foto" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Keterangan</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="keterangan" placeholder="Keterangan"></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2" name="proses">Simpan</button>
                        <a href="{{ url('barang') }}" class="btn btn-success">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
