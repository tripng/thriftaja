@extends('landingpage.index')
@section('content')
<div class="container d-flex justify-content-center min-vh-100 align-items-center">
    <div class="row w-100">
        <div class="input-group mb-3 blog__details__comment w-100 d-flex justify-content-center">
            <div class="w-50 text-center shadow p-5 mb-5 bg-white">
                <div class="title">
                    <h3 class="pb-5">Reset Password</h3>
                </div>
                <input type="email" placeholder="Email" class="py-2 mb-4 w-75 mb-2"></input> <br>
                <button type="submit" class="site-btn w-75">Reset Password</button>
                <div class="">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection