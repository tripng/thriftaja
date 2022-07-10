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
                        <a href="{{route('detail',['barang' => $b->slug])}}"><div class="product__item__pic set-bg" data-setbg="{{asset('storage/image/'.$b->foto)}}">
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
                                    @foreach(range(1,5) as $r)
                                        @php
                                            if($b->testimoni->count() > 0){
                                                $count = array_column($b->testimoni->all(),'rating');
                                                if($r <= collect($count)->avg()){
                                                    echo '<i class="fa fa-star text-warning"></i>';
                                                }
                                                else{
                                                    echo '<i class="fa fa-star-o"></i>';
                                                }
                                            }else{
                                                echo '<i class="fa fa-star-o"></i>';
                                            }
                                        @endphp
                                    @endforeach
                                </div>
                            <h5>Rp{{number_format($b->harga,0,',','.')}}</h5>
                        </div>
                    </div>
                </div>
            
            @endforeach
        </div>
    </div>