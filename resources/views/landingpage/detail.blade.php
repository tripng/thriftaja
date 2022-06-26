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
                            <h4>Hooded thermal anorak</h4>
                            <h3>$270.00 <span>70.00</span></h3>
                            <div class="product__details__cart__option">
                                <div class="quantity">
                                    <div class="pro-qty">
                                        <input type="text" value="1">
                                    </div>
                                </div>
                                <a href="#" class="primary-btn">add to cart</a>
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
            <div class="col-md-6">
                <div class="d-flex justify-content-between">
                    <h2>IPhone 13 Pro Max</h2>
                    <div class="font-weight-bold">Handphone</div>
                </div>
                <i class="fa fa-star text-warning"></i>
                <i class="fa fa-star text-warning"></i>
                <i class="fa fa-star text-warning"></i>
                <i class="fa fa-star text-warning"></i>
                <i class="fa fa-star-o"></i>
                <h4 class="mt-2">$250</h4>
                <h5 class="font-weight-bold mt-2">Stok 26</h5>

                <hr>
                <div class="font-weight-bold mt-3">Product Description</div>
                <p class="mt-2">A timeless design, with premium materials features as one of our most popular and iconic pieces. The dandy chair is perfect for any stylish living space with beech legs and lambskin leather upholstery.</p>

                <div class="font-weight-bold mt-3">Dimensions</div>
                <div class="row mt-2">
                    <div class="col-3">
                        <small class="font-weight-bold">Height</small>
                        <p>110 cm</p>
                    </div>
                    <div class="col-3">
                        <small class="font-weight-bold">Width</small>
                        <p>75 cm</p>
                    </div>
                    <div class="col-3">
                        <small class="font-weight-bold">Depth</small>
                        <p>50 cm</p>
                    </div>
                </div>

                <div class="font-weight-bold mt-3">Quantity</div>
                <div class="d-flex align-items-center">
                    <button class="btn mr-2" style="font-size: 25px;">-</button>
                    <div class="font-weight-bold mr-2">1</div>
                    <button class="btn" style="font-size: 25px;">+</button>
                </div>

                <div class="mt-4">
                    <button class="btn text-white rounded-0 mr-4 bg-purple px-4">Add to cart</button>
                    <button class="btn rounded-0 font-weight-bold text-purple">Save to favorites</button>
                </div>

            </div>
        </div>
    </div>

    <div id="review" class="py-4">
        <h4 class="font-weight-bold">Reviews</h4>
        <p class="mt-2">IPhone 13 Pro Max Black Purple 256GB Ex IBOX</p>
        <div class="row">
            <div class="col-md-6">
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
                                                    <div class="d-flex align-items-center mt-3">
                                                        <button class="btn mr-2" style="font-size: 20px;"><span class="fa fa-thumbs-o-up"></span></button>
                                                        <a href="#" class="text-purple font-weight-bold">Report</a>
                                                    </div>
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
                                                    <div class="d-flex align-items-center mt-3">
                                                        <button class="btn mr-2" style="font-size: 20px;"><span class="fa fa-thumbs-o-up"></span></button>
                                                        <a href="#" class="text-purple font-weight-bold">Report</a>
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
                        <a href=""><div class="product__item__pic set-bg" data-setbg="img/product/product-1.jpg">
                            <span class="label">New</span>
                        </div></a>
                        <div class="product__item__text">
                            <h6>Piqué Biker Jacket</h6>
                            <a href="#" class="add-cart">+ Add To Cart</a>
                            <h5>$67.24</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
                    <div class="product__item">
                        <a href=""><div class="product__item__pic set-bg" data-setbg="img/product/product-2.jpg">
                        </div></a>
                        <div class="product__item__text">
                            <h6>Piqué Biker Jacket</h6>
                            <a href="#" class="add-cart">+ Add To Cart</a>
                            <h5>$67.24</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
                    <div class="product__item sale">
                        <a href=""><div class="product__item__pic set-bg" data-setbg="img/product/product-3.jpg">
                            <span class="label">Sale</span>
                        </div></a>
                        <div class="product__item__text">
                            <h6>Multi-pocket Chest Bag</h6>
                            <a href="#" class="add-cart">+ Add To Cart</a>
                            <h5>$43.48</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
                    <div class="product__item">
                        <a href=""><div class="product__item__pic set-bg" data-setbg="img/product/product-4.jpg">
                        </div></a>
                        <div class="product__item__text">
                            <h6>Diagonal Textured Cap</h6>
                            <a href="#" class="add-cart">+ Add To Cart</a>
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