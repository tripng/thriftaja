@extends('landingpage.index')
@section('content')

<div class="container w-50">
    <div class="blog__details__comment">
        <h4>Nilai Produk</h4>
        <div class="barang d-flex">
            <img class="w-25" src="{{asset('storage/image/'.$barang->foto)}}" alt="">
            <h6>{{$barang->nama_barang}}</h6>
        </div>
        <form action="/rating" method="post">
            @csrf
            <div class="row">
                <div class="col-12 text-center rating">
                    @include('components.rating')
                </div>
                <div class="col-lg-12 text-center">
                    <textarea placeholder="Comment" class="@error('komentar') {{$message}} @enderror" name="komentar"></textarea>
                    <input type="hidden" value="{{$barang->slug}}" name="slug">
                    <input type="hidden" value="{{$barang->id}}" name="barang_id">
                    <button type="submit" class="site-btn">Post Penilaian</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection