<!-- Header Section Begin -->
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="header__logo">
                    <a href="{{ url('/') }}"><img src="{{asset('img/thriftaja.png')}}" alt="" width="120"></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <nav class="header__menu mobile-menu">
                    <ul>
                        <li class="{{Request::is('/') || Request::is('/home') ? 'active' : ''}}"><a href="{{ url('/') }}">Home</a></li>
                        <li class="{{Request::is('shop') || Request::is('allshop') ? 'active' : ''}}"><a href="{{ url('/shop') }}">Shop</a></li>
                        <li class="{{Request::is('kontakthriftaja') ? 'active' : ''}}"><a href="{{ route('kontakthriftaja') }}">Contacts</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="header__nav__option">
                    <a href="#" class="search-switch">
                        <img src="{{asset('img/icon/search.png')}}" alt="">
                    </a>
                    @auth()
                    <a href="{{route('cart',[auth()->user()->username])}}"><img src="{{asset('img/icon/cart.png')}}" alt=""> <span>{{auth()->user()->cart()->count()}}</span></a>
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{asset('storage/profile/'.auth()->user()->foto)}}" class="rounded-circle" style="width:40px; height:40px;" alt="">
                        </button>
                        <ul class="dropdown-menu pr-2" aria-labelledby="dropdownMenuButton">
                            <li class="ml-4 text-primary">{{auth()->user()->username}}</li>
                            <li class="text-danger"><span class="icon-html5 mr-4 text-danger"></span>Rp {{number_format(auth()->user()->payaja,0,',','.')}}</li>
                            <hr>
                            <li><a class="dropdown-item" href="{{route('profile')}}"><span class="icon-html5 mr-3"></span>Profile</a></li>
                            {{-- <li><a class="dropdown-item" href="{{route('resetpassword')}}"><span class="icon-html5 mr-3"></span>Ubah Password</a></li> --}}
                            <li><a class="dropdown-item" href="{{route('pesanan_saya')}}"><span class="icon-html5 mr-3"></span>Pesanan Saya</a></li>
                            <li><a class="dropdown-item" href="{{url('/password/reset')}}">Reset Password</a></li>
                            @can('admin')
                            <li><a class="dropdown-item" href="/admin"><span class="icon-html5 mr-3"></span>Administrasi</a></li>
                            @endcan
                            {{-- <li><a class="dropdown-item" href="#"><span class="icon-glass mr-3"></span>Settings</a></li> --}}
                            <li>
                                <form action="/logout" method="POST">
                                @csrf
                                <button class="dropdown-item"><span class="icon-flag "></span>{{__('Logout')}}</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                @else
                    <a href="{{route('login')}}" class="text-purple">Sign In →</a>
                @endauth
                </div>
            </div>
        <div class="canvas__open"><i class="fa fa-bars"></i></div>
    </div>
    </div>
</header>

<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form" action="{{route('allshop')}}">
            <input type="text" name="search" value="{{request('search')}}" id="search-input" placeholder="Search here....."><br>
            <button class="btn btn-light w-50 mx-auto my-3 font-weight-bold" type="submit">Search</button>
        </form>
    </div>
</div>

<!-- Header Section End -->
