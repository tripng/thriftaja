@extends('landingpage.index')
@section('content')
{{-- banner --}}
<div id="carouselExampleSlidesOnly" class="container carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="img/projek/tv.jpg" class="img-fluid" alt="...">
    </div>
    <div class="carousel-item">
        <img src="img/projek/l3.jpg" class="img-fluid" alt="...">
    </div>
</div>

{{-- akhir banner --}}
<section class="shop spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="shop__sidebar">
                    <div class="shop__sidebar__search">
                        <form action="/allshop">
                            @if(request('category'))
                                <input type="hidden" name="category" value="{{request('category')}}">
                            @endif
                            <input type="text" placeholder="Search..." name="search">
                            <button type="submit"><span class="icon_search"></span></button>
                        </form>
                    </div>
                    <div class="shop__sidebar__accordion">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-heading">
                                    <a data-toggle="collapse" data-target="#collapseOne">Categories</a>
                                </div>
                                <div id="collapseOne" class=" show" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="shop__sidebar__categories">
                                            <ul class="nice-scroll">
                                                @foreach($category as $c)
                                                    <li><a href="/allshop?category={{$c->slug}}">{{$c->name}} ({{$c->barang->count()}})</a></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Branding --}}
                            {{-- <div class="card">
                                <div class="card-heading">
                                    <a data-toggle="collapse" data-target="#collapseTwo">Branding</a>
                                </div>
                                <div id="collapseTwo" class="collapse show" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="shop__sidebar__brand">
                                            <ul>
                                                <li><a href="#">Louis Vuitton</a></li>
                                                <li><a href="#">Chanel</a></li>
                                                <li><a href="#">Hermes</a></li>
                                                <li><a href="#">Gucci</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- EndBranding --}}
                            <div class="card">
                                <div class="card-heading">
                                    <a data-toggle="collapse" data-target="#collapseThree">Filter Price</a>
                                </div>
                                <div id="collapseThree" class="collapse show" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="shop__sidebar__price">
                                            <ul>
                                                <li><a href="/allshop?price=50000">Rp 0 - Rp 50.000</a></li>
                                                <li><a href="/allshop?price=100000">Rp 50.000 - Rp 100.000</a></li>
                                                <li><a href="/allshop?price=150000">Rp 100.000 - Rp 150.000</a></li>
                                                <li><a href="/allshop?price=200000">Rp 150.000 - Rp 200.000</a></li>
                                                <li><a href="/allshop?price=250000">Rp 200.000 - Rp 250.000</a></li>
                                                <li><a href="/allshop">Rp 250.000+</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="card">
                                <div class="card-heading">
                                    <a data-toggle="collapse" data-target="#collapseFour">Size</a>
                                </div>
                                <div id="collapseFour" class="collapse show" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="shop__sidebar__size">
                                            <label for="xs">xs
                                                <input type="radio" id="xs">
                                            </label>
                                            <label for="sm">s
                                                <input type="radio" id="sm">
                                            </label>
                                            <label for="md">m
                                                <input type="radio" id="md">
                                            </label>
                                            <label for="xl">xl
                                                <input type="radio" id="xl">
                                            </label>
                                            <label for="2xl">2xl
                                                <input type="radio" id="2xl">
                                            </label>
                                            <label for="xxl">xxl
                                                <input type="radio" id="xxl">
                                            </label>
                                            <label for="3xl">3xl
                                                <input type="radio" id="3xl">
                                            </label>
                                            <label for="4xl">4xl
                                                <input type="radio" id="4xl">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <div class="card">
                                <div class="card-heading">
                                    <a data-toggle="collapse" data-target="#collapseFive">Colors</a>
                                </div>
                                <div id="collapseFive" class="collapse show" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="shop__sidebar__color">
                                            <label class="c-1" for="sp-1">
                                                <input type="radio" id="sp-1">
                                            </label>
                                            <label class="c-2" for="sp-2">
                                                <input type="radio" id="sp-2">
                                            </label>
                                            <label class="c-3" for="sp-3">
                                                <input type="radio" id="sp-3">
                                            </label>
                                            <label class="c-4" for="sp-4">
                                                <input type="radio" id="sp-4">
                                            </label>
                                            <label class="c-5" for="sp-5">
                                                <input type="radio" id="sp-5">
                                            </label>
                                            <label class="c-6" for="sp-6">
                                                <input type="radio" id="sp-6">
                                            </label>
                                            <label class="c-7" for="sp-7">
                                                <input type="radio" id="sp-7">
                                            </label>
                                            <label class="c-8" for="sp-8">
                                                <input type="radio" id="sp-8">
                                            </label>
                                            <label class="c-9" for="sp-9">
                                                <input type="radio" id="sp-9">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="card">
                                <div class="card-heading">
                                    <a data-toggle="collapse" data-target="#collapseSix">Tags</a>
                                </div>
                                <div id="collapseSix" class="collapse show" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="shop__sidebar__tags">
                                            <a href="#">Product</a>
                                            <a href="#">Bags</a>
                                            <a href="#">Shoes</a>
                                            <a href="#">Fashio</a>
                                            <a href="#">Clothing</a>
                                            <a href="#">Hats</a>
                                            <a href="#">Accessories</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="shop__product__option">
                    <div class="row">
                        @foreach($barang as $b)
                        @auth()
                        @php
                            $barang_id = $b->id;
                            $user_id = auth()->user()->id;
                        @endphp
                        @endauth
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <a href="{{route('detail',[
                                        'barang' => $b->slug,
                                    ])}}"><div class="product__item__pic set-bg" data-setbg="{{asset('storage/image/'.$b->foto)}}">
                                    </div></a>
                                    <div class="product__item__text">
                                        <h6>{{$b->nama_barang}}</h6>
                                        @auth()
                                        <form action="{{route('store-cart',[
                                            'username' => auth()->user()->username,
                                        ])}}" method="post">
                                            @csrf
                                            <input type="hidden" value="{{$b->id}}" name="barang_id">
                                            <input type="hidden" value="{{auth()->user()->id}}" name="user_id">
                                            <input type="hidden" value="1" name="jumlah">
                                            <input type="hidden" value="{{$b->harga}}" name="harga">
                                            <button class="add-cart">+ Add To Cart</button>
                                        </form>
                                        @else
                                        <a href="{{route('login')}}" class="add-cart">+ Add To Cart</a>
                                        @endauth
                                        <div class="rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        
                                        <h5><small>Rp </small>{{number_format($b->harga,0,',','.')}}</h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        {{$barang->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
</section>
@endsection