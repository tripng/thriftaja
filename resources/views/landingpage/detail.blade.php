@extends('landingpage.index')
@section('content')
<div class="container">
    <!-- Shop Details Section Begin -->
    <div id="carouselExampleSlidesOnly" class="carousel" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('img/projek/l1.jpg') }}" class="d-block w-100" alt="..." style="background-size: contain">
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
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <span> - 5 Reviews</span>
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
                                    <li><span>Kode:</span> 3812912</li>
                                    <li><span>Categories:</span> Clothes</li>
                                    <li><span>Stock:</span> 25</li>
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
                                    Previews(5)</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tabs-5" role="tabpanel">
                                    <div class="product__details__tab__content">
                                        <div class="product__details__tab__content__item">
                                            <h5>Products Infomation</h5>
                                            <p>A Pocket PC is a handheld computer, which features many of the same
                                                capabilities as a modern PC. These handy little devices allow
                                                individuals to retrieve and store e-mail messages, create a contact
                                                file, coordinate appointments, surf the internet, exchange text messages
                                                and more. Every product that is labeled as a Pocket PC must be
                                                accompanied with specific software to operate the unit and must feature
                                            a touchscreen and touchpad.</p>
                                            <p>As is the case with any new technology product, the cost of a Pocket PC
                                                was substantial during it’s early release. For approximately $700.00,
                                                consumers could purchase one of top-of-the-line Pocket PCs in 2003.
                                                These days, customers are finding that prices have become much more
                                                reasonable now that the newness is wearing off. For approximately
                                            $350.00, a new Pocket PC can now be purchased.</p>
                                        </div>
                                        <div class="product__details__tab__content__item">
                                            <h5>Material used</h5>
                                            <p>Polyester is deemed lower quality due to its none natural quality’s. Made
                                                from synthetic materials, not natural like wool. Polyester suits become
                                                creased easily and are known for not being breathable. Polyester suits
                                                tend to have a shine to them compared to wool and cotton suits, this can
                                                make the suit look cheap. The texture of velvet is luxurious and
                                                breathable. Velvet is a great choice for dinner party jacket and can be
                                            worn all year round.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tabs-6" role="tabpanel">
                                    <div class="product__details__tab__content">
                                        <div class="product__details__tab__content__item">
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
                                        </div>
                                        <div class="product__details__tab__content__item">
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
                                        </div>
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
                <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
                    <div class="product__item">
                        <a href=""><div class="product__item__pic set-bg" data-setbg="{{ asset('img/product/product-1.jpg')}}">
                            <span class="label">New</span>
                        </div></a>
                        <div class="product__item__text">
                            <h6>Piqué Biker Jacket</h6>
                            <a href="#" class="add-cart">+ Add To Cart</a>
                            <div class="rating">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>$67.24</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
                    <div class="product__item">
                        <a href=""><div class="product__item__pic set-bg" data-setbg="{{ asset('img/product/product-2.jpg')}}">
                        </div></a>
                        <div class="product__item__text">
                            <h6>Piqué Biker Jacket</h6>
                            <a href="#" class="add-cart">+ Add To Cart</a>
                            <div class="rating">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>$67.24</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
                    <div class="product__item sale">
                        <a href=""><div class="product__item__pic set-bg" data-setbg="{{ asset('img/product/product-3.jpg')}}">
                            <span class="label">Sale</span>
                        </div></a>
                        <div class="product__item__text">
                            <h6>Multi-pocket Chest Bag</h6>
                            <a href="#" class="add-cart">+ Add To Cart</a>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>$43.48</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
                    <div class="product__item">
                        <a href=""><div class="product__item__pic set-bg" data-setbg="{{ asset('img/product/product-4.jpg')}}">
                        </div></a>
                        <div class="product__item__text">
                            <h6>Diagonal Textured Cap</h6>
                            <a href="#" class="add-cart">+ Add To Cart</a>
                            <div class="rating">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>$60.9</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Related Section End -->
</div>

@endsection