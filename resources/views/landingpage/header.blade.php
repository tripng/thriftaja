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
                        <li class="{{Request::is('contact') ? 'active' : ''}}"><a href="{{ url('/contact') }}">Contacts</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="header__nav__option">
                    <a href="#" class="search-switch"><img src="{{asset('img/icon/search.png')}}" alt=""></a>
                    @auth
                    <a href="{{route('cart',[auth()->user()->username])}}"><img src="{{asset('img/icon/cart.png')}}" alt=""> <span>{{auth()->user()->cart()->count()}}</span></a>
                <div class="dropdown">
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{asset('img/icon/person-circle.svg')}}" alt="">
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li>{{auth()->user()->username}}</li>
                        <li><a class="dropdown-item" href="#"><span class="icon-html5 mr-3"></span>Profile</a></li>
                        @can('admin')
                        <li><a class="dropdown-item" href="/admin"><span class="icon-html5 mr-3"></span>Administrasi</a></li>
                        @endcan
                        <li><a class="dropdown-item" href="#"><span class="icon-glass mr-3"></span>Settings</a></li>
                        <li><a class="dropdown-item" href="/logout"><span class="icon-flag mr-3"></span>Logout</a></li>
                    </ul>
                </div>
                @else
                    <a href="{{route('login')}}" class="text-purple">Sign In →</a>
                @endauth
                </div>
                </div>
            </div>
        <div class="canvas__open"><i class="fa fa-bars"></i></div>
    </div>
</header>

<!-- Header Section End -->