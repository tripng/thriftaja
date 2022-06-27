    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <ul class="filter__controls">
                    <li class="active" data-filter="*">Best Sellers</li>
                    <li data-filter=".new-arrivals">New Arrivals</li>
                    <li data-filter=".hot-sales">Hot Sales</li>
                </ul>
            </div>
        </div>
        <div class="row product__filter">
            @foreach($barang as $b)
            <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix {{$product_filter->random()}}">
                <div class="product__item">
                        <a href="#"><div class="product__item__pic set-bg" data-setbg="{{asset('img/projek/l'.mt_rand(1,4).'.jpg')}}">
                            {{-- <span class="label">New</span> --}}
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
                            <h5>Rp{{number_format($b->harga,0,',','.')}}</h5>
                        </div>
                    </div>
                </div>
            
            @endforeach
        </div>
    </div>