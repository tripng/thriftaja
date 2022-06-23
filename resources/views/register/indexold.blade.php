@extends('landingpage.index')
@section('content')
 <div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-registration w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center ">Create an account</h1>
            <small class="d-block text-center mt-3">Already have an account? <a href="/login"> Login</a></small>
            <form method="post" action="/register">
              @csrf
              <div class="form-floating">
                  <label for="name">Nama</label>
                <input type="text" name="name" class="form-control rounded-top 
                  @error('name') is-invalid @enderror" 
                  
                  id="name" placeholder="Nama">
              </div>
              <div class="form-floating">
                  <label for="name">Username</label>
                <input type="text" name="username" class="form-control rounded-top" id="name" placeholder="Username">
              </div>
              <div class="form-floating"> 
                  <label for="username">No Hp</label>
                <input type="text" name="no_hp" class="form-control" id="username" placeholder="Hp">
              </div>
              <div class="form-floating">
                  <label for="username">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="username" placeholder="Alamat">
              </div>
              <div class="form-floating">
                  <label for="email">Email address</label>
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
              </div>
              <div class="form-floating">
                  <label for="password">Password</label>
                <input type="password" name="password" class="form-control rounded-bottom" id="password" placeholder="Password">
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
