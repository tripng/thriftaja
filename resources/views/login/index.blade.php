@extends('landingpage.index')
@section('content')
    <div class="container d-flex align-items-center border border-1">    
      {{-- form gambar--}}
      <div class="d-flex align-items-center">
      <div class="col-lg-6">
        <small class="d-flex mb-5 justify-content-end">Don't have an account ? <a href="/register" class="text-purple">&nbsp Sign Up</a></small>
        <h4 class="font-weight-bold mb-4">Sign In</h4>
        
          <form method="POST" action="{{url('/auth')}}">
            @csrf
              <div class="text-center ">
                      <a href="{{route('google.login')}}" class="w-100 rounded bg-light btn btn-light font-weight-medium">
                      <i class="fa fa-google"></i>Continue with google</a> 
             </div>
            <div>
              <label for="username">Username</label>
              <input type="text" class="@error('password') is-invalid @enderror form-control" id="username" name="username" placeholder="username">
              @error('username')
                  <div class="invalid-feedback">
                    {{$message}}
                  </div>
                  @enderror
            </div>
            <div>
                <label for="password">Password</label>
              <input type="password" class="@error('password') is-invalid @enderror form-control" id="password" name="password" placeholder="Password">
              @error('password')
                  <div class="invalid-feedback">
                    {{$message}}
                  </div>
                  @enderror
              <small class=" d-block text-right "><a href="{{route('resetpassword')}}" class="text-purple"> Forget your password?</a></small>
            </div>
            <div class="d-flex justify-content-center">
            <button class="btn btn-primary w-50 mt-4" type="submit">Login</button>
          </div>
          </form>
        </div>
      <div class="col-lg-6">
        <img src="{{ asset('img/projek/login.jpg') }}" class="img-fluid" alt="...">
      </div>
      {{-- akhir form gambar --}}
    </div>
    </div>
@endsection