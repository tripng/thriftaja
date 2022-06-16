@extends('landingpage.index')
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-4 rounded float-start">
        <main class="form-signin w-100 m-auto">
            <small class="d-block text-right mt-3">Don't have an account? <a href="/register"> Sign Up</a></small>
            <h1 class="h3 mb-3 fw-normal text-left">Sign In</h1>
            <form>
                <div class="text-center"><button>
                    <a href="#" class="btn btn-ligh">
                        <i class="fa fa-google"></i>Continue with google</a> </button>  <br/>
               </div>
              <div class="form-floating">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="name@example.com">
              </div>
              <div class="form-floating">
                  <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password">
                <small class="d-block text-right"><a href="#"> Forget your password?</a></small>
              </div>
              <button class="btn btn-lg btn-primary d-block btn-center" type="submit">Login</button> <br/>
            </form>
        </main>
    </div>
    <div class="card" style="width: 18rem;">
        <img src="{{ asset('img/projek/l2.jpg') }}" class="card-img-top" alt="...">
      </div>
</div>
@endsection
