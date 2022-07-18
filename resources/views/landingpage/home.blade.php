@extends('landingpage.index')
@section('content')

    @include('landingpage.hero')
    {{-- @include('landingpage.rekomendasi') --}}
    {{-- @include('barang.product') --}}
    {{-- @include('landingpage.rekomendasi') --}}
    @include('landingpage.product')
    {{-- @include('landingpage.sale') --}}
@endsection
