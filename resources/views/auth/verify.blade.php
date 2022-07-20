@extends('landingpage.index')
@section('content')
<div class="container" style="height: 100vh;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-info font-weight-bold text-center">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body text-center">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Tautan verifikasi baru telah dikirim ke alamat email Anda.') }}
                        </div>
                    @endif

                    {{ __('Sebelum melanjutkan, harap periksa email Anda untuk tautan verifikasi. ') }}
                    {{ __('Jika Anda tidak menerima email silahkan tekan tombol dibawah') }},
                    <form class="text-center" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link bg-dark text-light rounded-0 px-2 py-1 my-2 align-baseline">{{ __('Kirim Verifikasi') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
