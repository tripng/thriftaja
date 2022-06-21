<header class="header bg-f1f1f1">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-2">
                <div class="header__logo">
                    <a href="#"><img src="img/thriftaja.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <nav class="header__menu mobile-menu">
                    <ul>
                        </li>
                        <li class="active"><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/shop') }}">Shop</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-6 col-md-4">
                <div class="header__nav__option">
                    <a href="#" class="search-switch">
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit"><img src="img/icon/search.png" alt=""></button>
                        </form>
                    </a>

                    @auth
                        <a href="#"><img src="img/icon/heart.png" alt=""></a>
                        <div class="dropdown">
                            <button class="btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="img/icon/cart.png" alt="" class="mr-1"><small>0</small>
                            </button>
                            <ul class="dropdown-menu p-2" aria-labelledby="dropdownMenuButton1" style="width: 400px;">
                                <li>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <div class="text-secondary font-weight-bold mr-2">Samsung Tab A8 LTE</div>
                                            <div class="text-muted">1 item</div>
                                            <button class="btn mt-2"><span class="fa fa-trash-o" style="font-size: 20px;"></span></button>
                                        </div>
                                        <div class="d-flex">
                                            <div class="btn btn-sm bg-purple text-white mr-3" style="height: 30px;">-50%</div>
                                            <div>
                                                <div class="text-muted" style="text-decoration: line-through;">$14</div>
                                                <div class="font-weight-bold">$7</div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                </li>
                                <li>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <div class="text-secondary font-weight-bold mr-2">Samsung Tab A8 LTE</div>
                                            <div class="text-muted">1 item</div>
                                            <button class="btn mt-2"><span class="fa fa-trash-o" style="font-size: 20px;"></span></button>
                                        </div>
                                        <div class="d-flex">
                                            <div class="btn btn-sm bg-purple text-white mr-3" style="height: 30px;">-50%</div>
                                            <div>
                                                <div class="text-muted" style="text-decoration: line-through;">$14</div>
                                                <div class="font-weight-bold">$7</div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                </li>
                                <li>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <div class="text-secondary font-weight-bold mr-2">Samsung Tab A8 LTE</div>
                                            <div class="text-muted">1 item</div>
                                            <button class="btn mt-2"><span class="fa fa-trash-o" style="font-size: 20px;"></span></button>
                                        </div>
                                        <div class="d-flex">
                                            <div class="btn btn-sm bg-purple text-white mr-3" style="height: 30px;">-50%</div>
                                            <div>
                                                <div class="text-muted" style="text-decoration: line-through;">$14</div>
                                                <div class="font-weight-bold">$7</div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                </li>
                                <li>
                                    <div class="d-flex justify-content-between">
                                        <div class="text-muted">Order Value</div>
                                        <h5 class="text-muted">$21.00</h5>
                                    </div>
                                    <hr>
                                </li>
                                <li>
                                    <div class="d-flex justify-content-between">
                                        <h5 class="font-weight-bold text-purple">TOTAL</h5>
                                        <h5 class="text-purple font-weight-bold">$54</h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex justify-content-center">
                                        <a href="/cart" class="btn bg-purple text-white rounded-0 mt-3" style="width: 100px;">Buy Now</a>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="img/icon/person-circle.svg" alt="">
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                            <li>{{auth()->user()->username}}</li>
                            <li><a class="dropdown-item" href="#">profile</a></li>
                            @can('admin')
                            <li><a class="dropdown-item" href="/admin">Administrasi</a></li>
                            @endcan
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="/logout">Logout</a></li>
                        </ul>
                    </div>
                    @else
                    <a href="/login">Login/Register</a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</header>