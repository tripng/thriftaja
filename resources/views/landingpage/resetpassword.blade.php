@extends('landingpage.index')
@section('content')
<style>
    .is-invalid{
        border:1px solid red !important;
    }
</style>
<div class="container d-flex justify-content-center min-vh-100 align-items-center">
    <div class="row w-100">
        <div class="input-group mb-3 blog__details__comment w-100 d-flex justify-content-center">
            <div class="w-50 text-center shadow p-5 mb-5 bg-white">
                <div class="title">
                    <h3 class="pb-2">Reset Password</h3>
                </div>
                <form action="{{route('confirm-password')}}" method="post">
                    @csrf
                    <span class="text-danger">@error('password') {{$message}} @enderror</span>
                    <input type="password" placeholder="Password Saat Ini" name="password" class="@error('password') is-invalid @enderror py-2 mb-4 w-75 mb-2"></input><br>
                    <span class="text-danger">@error('new_password') {{$message}} @enderror</span>
                    <input type="password" placeholder="Password Baru" name="new_password" class="@error('new_password') is-invalid @enderror py-2 mb-4 w-75 mb-2"></input> <br>
                    <span class="text-danger">@error('confirm_password') {{$message}} @enderror</span>
                    <input type="password" placeholder="Confirm Password" name="confirm_password" class="@error('confirm_password') is-invalid @enderror py-2 mb-4 w-75 mb-2"></input> <br>
                    <button type="submit" class="site-btn w-75">Reset Password</button> <br>
                    <a href="{{route('forgot-password')}}">Lupa Password?</a>
                </form>
                <div class="">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection