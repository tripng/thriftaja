@extends('landingpage.index')
@section('content')
<div class="container">
    <div class="py-4">
        <div class="background-categories">
        </div>
        <div class="background-categories-2 mt-5">
            <h2 class="text-dark text-center font-weight-bold">Category</h2>
        </div>

        <div class="mt-5">
            <div class="row mt-3">
                @foreach($categories as $category)
                <div class="col-md-3 my-3">
                    <div class="card">
                        <div class="card-body p-0" style="position: relative;">
                            <img src="{{ asset('img/projek/l1.jpg') }}" alt="">
                            <div style=" position: absolute; top: 38%; width: 100%;">
                                <h4 class="text-white text-center font-weight-bold">{{$category->name}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection