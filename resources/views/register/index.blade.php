@extends('landingpage.index')
@section('content')
 <div class="row justify-content-center w-100">
    <div class="col-lg-5">
        <main class="form-registration w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center ">Create an account</h1>
            <small class="d-block text-center mt-3">Already have an account? <a href="/login"> Login</a></small>
            <form method="post" action="{{route('registrasi')}}">
              @csrf
              <div class="form-floating">
                  <label for="name">Nama</label>
                <input value="{{old('name')}}" type="text" name="name" class="form-control rounded-top 
                  @error('name') is-invalid @enderror" 
                  id="name" placeholder="Nama">
                  @error('name')
                  <div class="invalid-feedback">
                    {{$message}}
                  </div>
                  @enderror
              </div>
              <div class="form-floating">
                  <label for="name">Username</label>
                <input value="{{old('username')}}" type="text" name="username" class="form-control rounded-top @error('username') is-invalid @enderror" id="name" placeholder="Username">
                @error('username')
                  <div class="invalid-feedback">
                    {{$message}}
                  </div>
                  @enderror
              </div>
              <div class="form-floating"> 
                  <label for="no">No Hp</label>
                <input value="{{old('no')}}" type="text" name="no" class="form-control @error('no') is-invalid @enderror  id="no" placeholder="Hp">
                @error('no')
                  <div class="invalid-feedback">
                    {{$message}}
                  </div>
                  @enderror
              </div>
              <div class="form-floating">
                <label for="jk">Jenis Kelamin</label>
                <div class="product__details__option__size d-block">
                  <label for="l">Laki-Laki
                      <input type="radio" value="Laki-Laki" class="@error('alamat') is-invalid @enderror" id="l" name="genre">
                  </label>
                  <label for="sm">Perempuan
                      <input type="radio" value="Perempuan" class="@error('alamat') is-invalid @enderror" name="genre">
                  </label>
                  @error('genre')
                  <div class="invalid-feedback">
                    {{$message}}
                  </div>
                  @enderror
              </div>
              </div>
              <div class="form-floating">
                  <label for="username">Alamat</label>
                <input value="{{old('alamat')}}" type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="username" placeholder="Alamat">
                @error('alamat')
                  <div class="invalid-feedback">
                    {{$message}}
                  </div>
                  @enderror
              </div>
              <div class="form-floating">
                  <label for="username">Kota</label>
                <input value="{{old('kota')}}" type="text" name="kota" class="form-control @error('kota') is-invalid @enderror" id="username" placeholder="kota">
                @error('kota')
                  <div class="invalid-feedback">
                    {{$message}}
                  </div>
                  @enderror
              </div>
              <div class="form-floating">
                  <label for="username">Kode Pos</label>
                <input value="{{old('kode_pos')}}" type="text" name="kode_pos" class="form-control @error('kode_pos') is-invalid @enderror" id="username" placeholder="Kode Pos">
                @error('kode_pos')
                  <div class="invalid-feedback">
                    {{$message}}
                  </div>
                  @enderror
              </div>
              <div class="form-floating">
                  <label for="email">Email address</label>
                <input value="{{old('email')}}" type="email" name="email" class="@error('email') is-invalid @enderror form-control" id="floatingInput" placeholder="name@example.com">
                @error('email')
                  <div class="invalid-feedback">
                    {{$message}}
                  </div>
                  @enderror
              </div>
              <div class="form-floating">
                  <label for="password">Password</label>
                <input type="password" name="password" class="@error('password') is-invalid @enderror form-control rounded-bottom" id="password" placeholder="Password">
                @error('password')
                  <div class="invalid-feedback">
                    {{$message}}
                  </div>
                  @enderror
                <p class="d-block text center">use 8 or more characters  with a mix of letters,numbers & symbols</p> <br/>
                <p class="d-block text center">By creating an account, you agree to our
                     <a href="#"> Terms of use</a> and <a href="#"> Privacy Policy</a>
                </p>
              </div>
              <button class="btn btn-lg btn-primary mt-3 d-block btn-center" type="submit">Create an account</button> <br/>
            </form>
        </main>
    </div>
    <div class="card" style="width: 18rem;">
        <img src="{{ asset('img/projek/phone.jpg') }}" class="card-img-top" alt="...">
    </div>
 </div>
 @endsection
