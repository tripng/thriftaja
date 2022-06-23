@extends('admin.index')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Form Input Category</h4>
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
                    <form action="/categories" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama Category</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" id="name" class="form-control" placeholder="Nama Category">
                            </div>
                        </div>
                        <input type="hidden" name="slug">
                        <button type="submit" class="btn btn-primary mr-2" name="proses">Simpan</button>
                        <a href="{{ url('categories') }}" class="btn btn-success">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
