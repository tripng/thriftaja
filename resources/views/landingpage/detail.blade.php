@extends('landingpage.index')
@section('content')
<div class="container">
    <div id="preview" class="py-4">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body p-0">
                        <img src="{{ asset('img/projek/phone.jpg') }}" alt="">
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
                    <div class="col-4 text-center">
                        <h1 class="font-weight-bold d-inline">5.0</h1>
                        <h4 class="font-weight-bold d-inline">/5</h4>
                        <div style="font-size: 24px;">
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <div class="mt-2">34 Reviews</div>
                    </div>
                    <div class="col-8">
                        <div class="d-flex align-items-center">
                            <i class="fa fa-star text-warning mr-2" style="font-size: 24px;"></i>
                            <h5 class="font-weight-bold mr-2">5</h5>
                            <div class="bg-purple rounded mr-2" style="width: 80%; height: 10px;"></div>
                            <h5 class="font-weight-bold">31</h5>
                        </div>
                        <div class="d-flex mt-2 align-items-center">
                            <i class="fa fa-star text-warning mr-2" style="font-size: 24px;"></i>
                            <h5 class="font-weight-bold mr-2">4</h5>
                            <div class="bg-purple rounded mr-2" style="width: 64%; height: 10px;"></div>
                            <h5 class="font-weight-bold">2</h5>
                        </div>
                        <div class="d-flex mt-2 align-items-center">
                            <i class="fa fa-star text-warning mr-2" style="font-size: 24px;"></i>
                            <h5 class="font-weight-bold mr-2">3</h5>
                            <div class="bg-purple rounded mr-2" style="width: 48%; height: 10px;"></div>
                            <h5 class="font-weight-bold">0</h5>
                        </div>
                        <div class="d-flex mt-2 align-items-center">
                            <i class="fa fa-star text-warning mr-2" style="font-size: 24px;"></i>
                            <h5 class="font-weight-bold mr-2">2</h5>
                            <div class="bg-purple rounded mr-2" style="width: 32%; height: 10px;"></div>
                            <h5 class="font-weight-bold">0</h5>
                        </div>
                        <div class="d-flex mt-2 align-items-center">
                            <i class="fa fa-star text-warning mr-2" style="font-size: 24px;"></i>
                            <h5 class="font-weight-bold mr-2">1</h5>
                            <div class="bg-purple rounded mr-2" style="width: 16%; height: 10px;"></div>
                            <h5 class="font-weight-bold">1</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="customerImages" class="py-4">
        <div class="d-flex justify-content-between">
            <h4 class="font-weight-bold">Customer Images (16)</h4>
            <a href="#" class="btn btn-link">See All <span class="ml-3">></span></a>
        </div>
        <div class="row mt-4">
            <div class="col-md">
                <div class="card">
                    <div class="card-body p-0">
                        <img src="{{ asset('img/projek/l1.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card">
                    <div class="card-body p-0">
                        <img src="{{ asset('img/projek/l1.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card">
                    <div class="card-body p-0">
                        <img src="{{ asset('img/projek/l1.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card">
                    <div class="card-body p-0">
                        <img src="{{ asset('img/projek/l1.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card">
                    <div class="card-body p-0" style="position: relative;">
                        <img src="{{ asset('img/projek/l1.jpg') }}" alt="" style="filter: blur(1px);">
                        <div style="position: absolute; top: 38%; width: 100%;">
                            <h2 class="text-white text-center font-weight-bold">+8</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="" alt="">
    </div>

    <div id="allReviews" class="py-4">
        <h4 class="font-weight-bold">All Reviews (34)</h4>
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
                <div class="d-flex">
                    <div class="card mr-2" style="width: 150px;">
                        <div class="card-body p-0">
                            <img src="{{ asset('img/projek/l1.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="card mr-2" style="width: 150px;">
                        <div class="card-body p-0">
                            <img src="{{ asset('img/projek/l1.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="card" style="width: 150px;">
                        <div class="card-body p-0">
                            <img src="{{ asset('img/projek/l1.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center mt-3">
                    <button class="btn mr-2" style="font-size: 30px;"><span class="fa fa-thumbs-o-up"></span></button>
                    <a href="#" class="text-purple font-weight-bold">Report</a>
                </div>
            </div>
        </div>
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
                <div class="d-flex">
                    <div class="card mr-2" style="width: 150px;">
                        <div class="card-body p-0">
                            <img src="{{ asset('img/projek/l1.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="card mr-2" style="width: 150px;">
                        <div class="card-body p-0">
                            <img src="{{ asset('img/projek/l1.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="card" style="width: 150px;">
                        <div class="card-body p-0">
                            <img src="{{ asset('img/projek/l1.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center mt-3">
                    <button class="btn mr-2" style="font-size: 30px;"><span class="fa fa-thumbs-o-up"></span></button>
                    <a href="#" class="text-purple font-weight-bold">Report</a>
                </div>
            </div>
        </div>
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
                <div class="d-flex">
                    <div class="card mr-2" style="width: 150px;">
                        <div class="card-body p-0">
                            <img src="{{ asset('img/projek/l1.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="card mr-2" style="width: 150px;">
                        <div class="card-body p-0">
                            <img src="{{ asset('img/projek/l1.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="card" style="width: 150px;">
                        <div class="card-body p-0">
                            <img src="{{ asset('img/projek/l1.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center mt-3">
                    <button class="btn mr-2" style="font-size: 30px;"><span class="fa fa-thumbs-o-up"></span></button>
                    <a href="#" class="text-purple font-weight-bold">Report</a>
                </div>
            </div>
        </div>
    </div>

    <div id="recommendation" class="py-4">
        <h4 class="font-weight-bold">You might also find these</h4>
        <div class="row mt-4">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body p-0">
                        <img src="{{ asset('img/projek/l1.jpg') }}" alt="">
                    </div>
                </div>
                <h5 class="mt-3">Macbook Air</h5>
                <div class="mt-1">
                    <span class="fa fa-star text-warning"></span>
                    <span class="fa fa-star text-warning"></span>
                    <span class="fa fa-star text-warning"></span>
                    <span class="fa fa-star text-warning"></span>
                    <span class="fa fa-star-o"></span>
                </div>
                <h5 class="mt-1 font-weight-bold">$250</h5>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body p-0">
                        <img src="{{ asset('img/projek/l1.jpg') }}" alt="">
                    </div>
                </div>
                <h5 class="mt-3">Macbook Air</h5>
                <div class="mt-1">
                    <span class="fa fa-star text-warning"></span>
                    <span class="fa fa-star text-warning"></span>
                    <span class="fa fa-star text-warning"></span>
                    <span class="fa fa-star text-warning"></span>
                    <span class="fa fa-star-o"></span>
                </div>
                <h5 class="mt-1 font-weight-bold">$250</h5>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body p-0">
                        <img src="{{ asset('img/projek/l1.jpg') }}" alt="">
                    </div>
                </div>
                <h5 class="mt-3">Macbook Air</h5>
                <div class="mt-1">
                    <span class="fa fa-star text-warning"></span>
                    <span class="fa fa-star text-warning"></span>
                    <span class="fa fa-star text-warning"></span>
                    <span class="fa fa-star text-warning"></span>
                    <span class="fa fa-star-o"></span>
                </div>
                <h5 class="mt-1 font-weight-bold">$250</h5>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body p-0">
                        <img src="{{ asset('img/projek/l1.jpg') }}" alt="">
                    </div>
                </div>
                <h5 class="mt-3">Macbook Air</h5>
                <div class="mt-1">
                    <span class="fa fa-star text-warning"></span>
                    <span class="fa fa-star text-warning"></span>
                    <span class="fa fa-star text-warning"></span>
                    <span class="fa fa-star text-warning"></span>
                    <span class="fa fa-star-o"></span>
                </div>
                <h5 class="mt-1 font-weight-bold">$250</h5>
            </div>
        </div>
        <div class="mt-5 text-center">
            <a href="#" class="btn btn-secondary rounded-0" style="width: 200px;">See More</a>
        </div>
    </div>
</div>

@endsection