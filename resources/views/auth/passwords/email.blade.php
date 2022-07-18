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
                    <h3 class="pb-2">{{ __('Reset Password') }}</h3>
                </div>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <form action="{{ route('password.email') }}" method="post">
                    @csrf
                    <input id="email" type="email" class="py-2 mb-2 w-100 mb-2 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Masukkan Email">
                    <br>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div class="row mb-0">
                            <button type="submit" class="btn btn-sm btn-primary px-2 py-2 mx-auto">
                                {{ __('Kirim Password Link') }}
                            </button>
                    </div>
                </form>
                <div class="">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection