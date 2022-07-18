@extends('landingpage.index')
@section('content')
    <div class="container d-flex align-items-center border border-1">    
      {{-- form gambar--}}
      <div class="d-flex align-items-center">
      <div class="col-lg-6">
        <small class="d-flex mb-5 justify-content-end">Tidak Mempunyai Akun? <a href="/register" class="text-purple">&nbsp Sign Up</a></small>
        <h4 class="font-weight-bold mb-4">{{ __('Login') }}</h4>
        
          <form method="POST" action="{{ route('login') }}">
            @csrf
              <div class="text-center ">
                      <a href="{{route('google.login')}}" class="w-100 rounded bg-light btn btn-light font-weight-medium">
                      <i class="fa fa-google"></i>Continue with google</a> 
             </div>
            <div>
              <label for="email">Email</label>
              <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus name="email">
              @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
            </div>
            <div>
                <label for="password">{{ __('Password') }}</label>
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
              @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="row mb-3">
              <div class="col-md-6">
                  <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                      <label class="form-check-label" for="remember">
                          {{ __('Remember Me') }}
                      </label>
                  </div>
              </div>
          </div>
          <div class="row mb-0">
            <div class="col-md-8">
                <button type="submit w-50" class="btn btn-lg btn-primary">
                    {{ __('Login') }}
                </button>
              </div>
            </div>
            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
            {{-- <div class="d-flex justify-content-center">
            <button class="btn btn-primary w-50 mt-4" type="submit">Login</button>
          </div> --}}
          </form>
        </div>
      <div class="col-lg-6">
        <img src="{{ asset('img/projek/login.jpg') }}" class="img-fluid" alt="...">
      </div>
      {{-- akhir form gambar --}}
    </div>
    </div>
@endsection