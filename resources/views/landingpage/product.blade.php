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
                        <div class="product__item__pic set-bg" data-setbg="{{asset('img/projek/l'.mt_rand(1,4).'.jpg')}}">
                            {{-- <span class="label">New</span> --}}
                            <ul class="product__hover">
                                <li><a href="#"><img src="{{asset('img/icon/heart.png')}}" alt=""></a></li>
                                <li><a href="#"><img src="{{asset('img/icon/compare.png')}}" alt=""> <span>Compare</span></a></li>
                                <li><a href="#"><img src="{{asset('img/icon/search.png')}}" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>{{$b->nama_barang}}</h6>
                            <a href="#" class="add-cart">+ Add To Cart</a>
                            <div class="rating">
                                @foreach(range(1,mt_rand(1,5)) as $n)
                                <i class="fa fa-star-o"></i>
                                @endforeach
                            </div>
                            <h5>Rp{{number_format($b->harga,0,',','.')}}</h5>
                            <div class="product__color__select">
                                <label for="pc-1">
                                    <input type="radio" id="pc-1">
                                </label>
                                <label class="active black" for="pc-2">
                                    <input type="radio" id="pc-2">
                                </label>
                                <label class="grey" for="pc-3">
                                    <input type="radio" id="pc-3">
                                </label>
                            </div>
                            
                        </div>
                        <a href="#">Lihat Barang</a>
                    </div>
                </div>
            
            @endforeach
        </div>
    </div>