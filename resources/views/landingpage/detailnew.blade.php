@extends('landingpage.index')
@section('content')
<div class="container">
    <!-- Shop Details Section Begin -->
    <div id="carouselExampleSlidesOnly" class="carousel" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('storage/image/'.$barang->foto) }}" class="d-block w-50 mx-auto" alt="...">
          </div>
        </div>
      </div>
        <div class="product__details__content mt-5">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <div class="product__details__text">
                            <h4>{{$barang->nama_barang}}</h4>
                            <div class="rating">
                                @foreach(range(1,5) as $r)
                                    @php
                                        if($barang->testimoni->count() > 0){
                                            $count = array_column($barang->testimoni->all(),'rating');
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
                                <span> - {{$penilaian->count()}} Reviews</span>
                            </div>
                            <h3>Rp {{number_format($barang->harga,0,',','.')}} <span>Rp {{number_format($barang->harga+(20*100),0,',','.')}}</span></h3>
                            <div class="product__details__cart__option">
                                {{-- <div class="quantity">
                                    <div class="pro-qty">
                                        <input type="text" value="1">
                                    </div>
                                </div> --}}
                                @auth()
                                    <form action="{{route('store-cart',[
                                        'username' => auth()->user()->username,
                                    ])}}" method="post">
                                        @csrf
                                        <input type="hidden" value="{{$barang->id}}" name="barang_id">
                                        <input type="hidden" value="{{auth()->user()->id}}" name="user_id">
                                        <input type="hidden" value="1" name="jumlah">
                                        <input type="hidden" value="{{$barang->harga}}" name="harga">
                                        <button class="primary-btn border-0">+ Add To Cart</button>
                                    </form>
                                @else
                                    <a href="{{route('login')}}" class="primary-btn">+ Add To Cart</a>
                                @endauth
                            </div>
                            <div class="product__details__last__option">
                                <ul>
                                    <li><span>Kode:</span> {{$barang->kode_barang}}</li>
                                    <li><span>Categories:</span> {{$barang->category->name}}</li>
                                    <li><span>Stock:</span> {{$barang->stok}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="review" class="py-4">
        <div class="container">
        <div class="row w-100">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__details__tab">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tabs-5"
                                    role="tab">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabs-6" role="tab">Customer
                                    Previews({{$penilaian->count()}})</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tabs-5" role="tabpanel">
                                    <div class="product__details__tab__content">
                                        <div class="product__details__tab__content__item">
                                            <h5>Products Infomation</h5>
                                            <p>{{$barang->keterangan}}</p>
                                        </div>
                                        {{-- <div class="product__details__tab__content__item">
                                            <h5>Material used</h5>
                                            <p>Polyester is deemed lower quality due to its none natural quality’s. Made
                                                from synthetic materials, not natural like wool. Polyester suits become
                                                creased easily and are known for not being breathable. Polyester suits
                                                tend to have a shine to them compared to wool and cotton suits, this can
                                                make the suit look cheap. The texture of velvet is luxurious and
                                                breathable. Velvet is a great choice for dinner party jacket and can be
                                            worn all year round.</p>
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="tab-pane" id="tabs-6" role="tabpanel">
                                    <div class="product__details__tab__content">
                                        @foreach($penilaian as $p)
                                        <div class="product__details__tab__content__item">
                                            <div class="row mt-4">
                                                <div class="col-md-1">
                                                    <img src="{{ asset('storage/profile/'.$p->user->foto) }}" alt="" class="rounded-circle w-100">
                                                </div>
                                                <div class="col-md-2">
                                                    <h5 class="font-weight-bold">{{$p->user->username}}</h5>
                                                    <p>5 days ago</p>
                                                </div>
                                                <div class="col-md p-0">
                                                    bintang
                                                    <p>{{$p->komentar}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        {{-- <div class="product__details__tab__content__item">
                                            <div class="row mt-4">
                                                <div class="col-md-1">
                                                    <img src="{{ asset('img/about/testimonial-author.jpg') }}" alt="" class="rounded-circle" style="width: 70px;">
                                                </div>
                                                <div class="col-md-2">
                                                    <h5 class="font-weight-bold">As**ul</h5>
                                                    <p>5 days ago</p>
                                                </div>
                                                <div class="col-md p-0">
                                                    <span class="fa fa-star text-warning"></span>
                                                    <span class="fa fa-star text-warning"></span>
                                                    <span class="fa fa-star text-warning"></span>
                                                    <span class="fa fa-star text-warning"></span>
                                                    <span class="fa fa-star-o"></span>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum mollitia autem exercitationem sequi incidunt blanditiis nihil. Ex quibusdam quisquam laudantium, labore fuga quaerat vero cupiditate animi, accusantium placeat numquam sunt.</p>
                                                    
                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </section>
    <!-- Shop Details Section End -->
    <!-- Related Section Begin -->
    <section class="related spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="related-title">Related Product</h3>
                </div>
            </div>
            <div class="row">
                @foreach($related as $rel)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
                        <div class="product__item">
                            <a href="{{route('detail',['barang' => $rel->slug])}}"><div class="product__item__pic set-bg" data-setbg="{{ asset('storage/image/'.$rel->foto)}}">
                                {{-- <span class="label">New</span> --}}
                            </div></a>
                            <div class="product__item__text">
                                <h6>{{$rel->nama_barang}}</h6>
                                    @auth()
                                        <form action="{{route('store-cart',[
                                            'username' => auth()->user()->username,
                                        ])}}" method="post">
                                            @csrf
                                            <input type="hidden" value="{{$rel->id}}" name="barang_id">
                                            <input type="hidden" value="{{auth()->user()->id}}" name="user_id">
                                            <input type="hidden" value="1" name="jumlah">
                                            <input type="hidden" value="{{$rel->harga}}" name="harga">
                                            <button class="add-cart">+ Add To Cart</button>
                                        </form>
                                        @else
                                        <a href="{{route('login')}}" class="add-cart">+ Add To Cart</a>
                                    @endauth
                                <div class="rating">
                                    @foreach(range(1,5) as $r)
                                    @php
                                        if($rel->testimoni->count() > 0){
                                            $count = array_column($rel->testimoni->all(),'rating');
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
                                <h5>Rp {{number_format($rel->harga,0,',','.')}}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach()
            </div>
        </div>
    </section>
    <!-- Related Section End -->
</div>

@endsection