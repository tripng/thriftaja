@extends('landingpage.index')
@section('content')
<div class="container">
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
    {{-- kategori --}}
    <div class="row product__filter ">
        <div class="col-lg-12 mt-4  d-flex flex-wrap justify-content-between">
            <div class="text-black-50">
                <h5>Categories</h5>
            </div>
            <div class="">
                <a class="text-purple" href="#"> View All</a>
            </div>
        </div>
        <div class="d-flex justify-content-evenly mt-2">
            <div class="col-lg-3 ">
                <div class="card d-block mx-auto">
                    <img src="img/projek/earphone1.jpg" class="card-img-top " alt="...">
                    <div class="carousel-caption d-none d-md-block text-white align-items-center">
                        <h5>Monitor</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 ">
                <div class="card d-block mx-auto">
                    <img src="img/projek/l1squaree.jpg" class="card-img-top" alt="...">
                    <div class="carousel-caption d-none d-md-block text-white">
                        <h5>Setrika</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 ">
                <div class="card d-block mx-auto">
                    <img src="img/projek/l2squaree.jpg" class="card-img-top" alt="...">
                    <div class="carousel-caption d-none d-md-block text-white">
                        <h5>Handphone</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 ">
                <div class="card d-block mx-auto">
                    <img src="img/projek/l3squaree.jpg" class="card-img-top" alt="...">
                    <div class="carousel-caption d-none d-md-block text-white">
                        <h5>Laptop</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- akhir kategori --}}
    {{-- product --}}
    <div class="row product__filter ">
        <div class="col-lg-12 margin-tb mt-4 ">
            <div class="pull-left">
                <h5>Products</h5>
            </div>
            <div class="d-flex justify-content-end">
                <a class="text-purple" href="#"> View All</a>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6">
            <div class="product__item">
                <div class="product__item__pic set-bg" data-setbg="img/projek/philips.jpg" background-size: cover;>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6">
            <div class="product__item">
                <div class="product__item__pic set-bg" data-setbg="img/projek/philips.jpg">
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6">
            <div class="product__item">
                <div class="product__item__pic set-bg" data-setbg="img/projek/philips.jpg">
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6">
            <div class="product__item">
                <div class="product__item__pic set-bg" data-setbg="img/projek/bardi.jpg">
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6">
            <div class="product__item">
                <div class="product__item__pic set-bg" data-setbg="img/projek/philips.jpg">
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6">
            <div class="product__item">
                <div class="product__item__pic set-bg" data-setbg="img/projek/mi.jpg">
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6">
            <div class="product__item">
                <div class="product__item__pic set-bg" data-setbg="img/projek/mi.jpg">
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6">
            <div class="product__item">
                <div class="product__item__pic set-bg" data-setbg="img/projek/mi.jpg">
                </div>
            </div>
        </div>
    </div>
    {{-- akhir product --}}
    {{-- recomendation --}}
    <div class="row product__filter">
        <div class="col-lg-12 mt-4 mb-3">
            <div class="pull-left">
                <h5>Recomendation</h5>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/product/product-13.jpg">
                            {{-- <ul class="product__hover">
                                <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a>
                                </li>
                                <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                            </ul> --}}
                        </div>
                        <div class="product__item__text">
                            <h6>T-shirt Contrast Pocket</h6>
                            <a href="#" class="add-cart">+ Add To Cart</a>
                            <div class="rating">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>$49.66</h5>
                            <div class="product__color__select">
                                <label for="pc-37">
                                    <input type="radio" id="pc-37">
                                </label>
                                <label class="active black" for="pc-38">
                                    <input type="radio" id="pc-38">
                                </label>
                                <label class="grey" for="pc-39">
                                    <input type="radio" id="pc-39">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/product/product-2.jpg">
                            {{-- <ul class="product__hover">
                                <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a>
                                </li>
                                <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                            </ul> --}}
                        </div>
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
                            <div class="product__color__select">
                                <label for="pc-4">
                                    <input type="radio" id="pc-4">
                                </label>
                                <label class="active black" for="pc-5">
                                    <input type="radio" id="pc-5">
                                </label>
                                <label class="grey" for="pc-6">
                                    <input type="radio" id="pc-6">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item sale">
                        <div class="product__item__pic set-bg" data-setbg="img/product/product-3.jpg">
                            <span class="label">Sale</span>
                            {{-- <ul class="product__hover">
                                <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a>
                                </li>
                                <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                            </ul> --}}
                        </div>
                        <div class="product__item__text">
                            <h6>Multi-pocket Chest Bag</h6>
                            <a href="#" class="add-cart">+ Add To Cart</a>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>$43.48</h5>
                            <div class="product__color__select">
                                <label for="pc-7">
                                    <input type="radio" id="pc-7">
                                </label>
                                <label class="active black" for="pc-8">
                                    <input type="radio" id="pc-8">
                                </label>
                                <label class="grey" for="pc-9">
                                    <input type="radio" id="pc-9">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/product/product-4.jpg">
                            {{-- <ul class="product__hover">
                                <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a>
                                </li>
                                <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                            </ul> --}}
                        </div>
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
                            <div class="product__color__select">
                                <label for="pc-10">
                                    <input type="radio" id="pc-10">
                                </label>
                                <label class="active black" for="pc-11">
                                    <input type="radio" id="pc-11">
                                </label>
                                <label class="grey" for="pc-12">
                                    <input type="radio" id="pc-12">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item sale">
                        <div class="product__item__pic set-bg" data-setbg="img/product/product-6.jpg">
                            <span class="label">Sale</span>
                            {{-- <ul class="product__hover">
                                <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a>
                                </li>
                                <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                            </ul> --}}
                        </div>
                        <div class="product__item__text">
                            <h6>Ankle Boots</h6>
                            <a href="#" class="add-cart">+ Add To Cart</a>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>$98.49</h5>
                            <div class="product__color__select">
                                <label for="pc-16">
                                    <input type="radio" id="pc-16">
                                </label>
                                <label class="active black" for="pc-17">
                                    <input type="radio" id="pc-17">
                                </label>
                                <label class="grey" for="pc-18">
                                    <input type="radio" id="pc-18">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/product/product-7.jpg">
                            {{-- <ul class="product__hover">
                                <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a>
                                </li>
                                <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                            </ul> --}}
                        </div>
                        <div class="product__item__text">
                            <h6>T-shirt Contrast Pocket</h6>
                            <a href="#" class="add-cart">+ Add To Cart</a>
                            <div class="rating">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>$49.66</h5>
                            <div class="product__color__select">
                                <label for="pc-19">
                                    <input type="radio" id="pc-19">
                                </label>
                                <label class="active black" for="pc-20">
                                    <input type="radio" id="pc-20">
                                </label>
                                <label class="grey" for="pc-21">
                                    <input type="radio" id="pc-21">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/product/product-8.jpg">
                            {{-- <ul class="product__hover">
                                <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a>
                                </li>
                                <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                            </ul> --}}
                        </div>
                        <div class="product__item__text">
                            <h6>Basic Flowing Scarf</h6>
                            <a href="#" class="add-cart">+ Add To Cart</a>
                            <div class="rating">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>$26.28</h5>
                            <div class="product__color__select">
                                <label for="pc-22">
                                    <input type="radio" id="pc-22">
                                </label>
                                <label class="active black" for="pc-23">
                                    <input type="radio" id="pc-23">
                                </label>
                                <label class="grey" for="pc-24">
                                    <input type="radio" id="pc-24">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/product/product-9.jpg">
                            {{-- <ul class="product__hover">
                                <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a>
                                </li>
                                <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                            </ul> --}}
                        </div>
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
                            <div class="product__color__select">
                                <label for="pc-25">
                                    <input type="radio" id="pc-25">
                                </label>
                                <label class="active black" for="pc-26">
                                    <input type="radio" id="pc-26">
                                </label>
                                <label class="grey" for="pc-27">
                                    <input type="radio" id="pc-27">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item sale">
                        <div class="product__item__pic set-bg" data-setbg="img/product/product-10.jpg">
                            <span class="label">Sale</span>
                            {{-- <ul class="product__hover">
                                <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a>
                                </li>
                                <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                            </ul> --}}
                        </div>
                        <div class="product__item__text">
                            <h6>Multi-pocket Chest Bag</h6>
                            <a href="#" class="add-cart">+ Add To Cart</a>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>$43.48</h5>
                            <div class="product__color__select">
                                <label for="pc-28">
                                    <input type="radio" id="pc-28">
                                </label>
                                <label class="active black" for="pc-29">
                                    <input type="radio" id="pc-29">
                                </label>
                                <label class="grey" for="pc-30">
                                    <input type="radio" id="pc-30">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/product/product-11.jpg">
                            {{-- <ul class="product__hover">
                                <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a>
                                </li>
                                <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                            </ul> --}}
                        </div>
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
                            <div class="product__color__select">
                                <label for="pc-31">
                                    <input type="radio" id="pc-31">
                                </label>
                                <label class="active black" for="pc-32">
                                    <input type="radio" id="pc-32">
                                </label>
                                <label class="grey" for="pc-33">
                                    <input type="radio" id="pc-33">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item sale">
                        <div class="product__item__pic set-bg" data-setbg="img/product/product-12.jpg">
                            <span class="label">Sale</span>
                            {{-- <ul class="product__hover">
                                <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a>
                                </li>
                                <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                            </ul> --}}
                        </div>
                        <div class="product__item__text">
                            <h6>Ankle Boots</h6>
                            <a href="#" class="add-cart">+ Add To Cart</a>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>$98.49</h5>
                            <div class="product__color__select">
                                <label for="pc-34">
                                    <input type="radio" id="pc-34">
                                </label>
                                <label class="active black" for="pc-35">
                                    <input type="radio" id="pc-35">
                                </label>
                                <label class="grey" for="pc-36">
                                    <input type="radio" id="pc-36">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/product/product-13.jpg">
                            {{-- <ul class="product__hover">
                                <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a>
                                </li>
                                <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                            </ul> --}}
                        </div>
                        <div class="product__item__text">
                            <h6>T-shirt Contrast Pocket</h6>
                            <a href="#" class="add-cart">+ Add To Cart</a>
                            <div class="rating">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>$49.66</h5>
                            <div class="product__color__select">
                                <label for="pc-37">
                                    <input type="radio" id="pc-37">
                                </label>
                                <label class="active black" for="pc-38">
                                    <input type="radio" id="pc-38">
                                </label>
                                <label class="grey" for="pc-39">
                                    <input type="radio" id="pc-39">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
        {{-- <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
            <div class="product__item">
                <div class="product__item__pic set-bg" data-setbg="img/projek/l3.jpg">
                    <span class="label">New</span>
                    <ul class="product__hover">
                        <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                        <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                        <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                    </ul>
                </div>
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
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales">
            <div class="product__item">
                <div class="product__item__pic set-bg" data-setbg="img/projek/mfi.jpg">
                    <ul class="product__hover">
                        <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                        <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                        <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                    </ul>
                </div>
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
                    <div class="product__color__select">
                        <label for="pc-4">
                            <input type="radio" id="pc-4">
                        </label>
                        <label class="active black" for="pc-5">
                            <input type="radio" id="pc-5">
                        </label>
                        <label class="grey" for="pc-6">
                            <input type="radio" id="pc-6">
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
            <div class="product__item sale">
                <div class="product__item__pic set-bg" data-setbg="img/projek/tv.jpg">
                    <span class="label">Sale</span>
                    <ul class="product__hover">
                        <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                        <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                        <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                    </ul>
                </div>
                <div class="product__item__text">
                    <h6>Multi-pocket Chest Bag</h6>
                    <a href="#" class="add-cart">+ Add To Cart</a>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <h5>$43.48</h5>
                    <div class="product__color__select">
                        <label for="pc-7">
                            <input type="radio" id="pc-7">
                        </label>
                        <label class="active black" for="pc-8">
                            <input type="radio" id="pc-8">
                        </label>
                        <label class="grey" for="pc-9">
                            <input type="radio" id="pc-9">
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales">
            <div class="product__item">
                <div class="product__item__pic set-bg" data-setbg="img/projek/sandisk.jpg">
                    <ul class="product__hover">
                        <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                        <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                        <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                    </ul>
                </div>
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
                    <div class="product__color__select">
                        <label for="pc-10">
                            <input type="radio" id="pc-10">
                        </label>
                        <label class="active black" for="pc-11">
                            <input type="radio" id="pc-11">
                        </label>
                        <label class="grey" for="pc-12">
                            <input type="radio" id="pc-12">
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
            <div class="product__item">
                <div class="product__item__pic set-bg" data-setbg="img/projek/phone1.jpg">
                    <ul class="product__hover">
                        <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                        <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                        <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                    </ul>
                </div>
                <div class="product__item__text">
                    <h6>Lether Backpack</h6>
                    <a href="#" class="add-cart">+ Add To Cart</a>
                    <div class="rating">
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <h5>$31.37</h5>
                    <div class="product__color__select">
                        <label for="pc-13">
                            <input type="radio" id="pc-13">
                        </label>
                        <label class="active black" for="pc-14">
                            <input type="radio" id="pc-14">
                        </label>
                        <label class="grey" for="pc-15">
                            <input type="radio" id="pc-15">
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales">
            <div class="product__item sale">
                <div class="product__item__pic set-bg" data-setbg="img/projek/philips.jpg">
                    <span class="label">Sale</span>
                    <ul class="product__hover">
                        <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                        <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                        <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                    </ul>
                </div>
                <div class="product__item__text">
                    <h6>Ankle Boots</h6>
                    <a href="#" class="add-cart">+ Add To Cart</a>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <h5>$98.49</h5>
                    <div class="product__color__select">
                        <label for="pc-16">
                            <input type="radio" id="pc-16">
                        </label>
                        <label class="active black" for="pc-17">
                            <input type="radio" id="pc-17">
                        </label>
                        <label class="grey" for="pc-18">
                            <input type="radio" id="pc-18">
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
            <div class="product__item">
                <div class="product__item__pic set-bg" data-setbg="img/projek/tp-link.jpg">
                    <ul class="product__hover">
                        <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                        <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                        <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                    </ul>
                </div>
                <div class="product__item__text">
                    <h6>T-shirt Contrast Pocket</h6>
                    <a href="#" class="add-cart">+ Add To Cart</a>
                    <div class="rating">
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <h5>$49.66</h5>
                    <div class="product__color__select">
                        <label for="pc-19">
                            <input type="radio" id="pc-19">
                        </label>
                        <label class="active black" for="pc-20">
                            <input type="radio" id="pc-20">
                        </label>
                        <label class="grey" for="pc-21">
                            <input type="radio" id="pc-21">
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales">
            <div class="product__item">
                <div class="product__item__pic set-bg" data-setbg="img/projek/setrika.jpg">
                    <ul class="product__hover">
                        <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                        <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                        <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                    </ul>
                </div>
                <div class="product__item__text">
                    <h6>Basic Flowing Scarf</h6>
                    <a href="#" class="add-cart">+ Add To Cart</a>
                    <div class="rating">
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <h5>$26.28</h5>
                    <div class="product__color__select">
                        <label for="pc-22">
                            <input type="radio" id="pc-22">
                        </label>
                        <label class="active black" for="pc-23">
                            <input type="radio" id="pc-23">
                        </label>
                        <label class="grey" for="pc-24">
                            <input type="radio" id="pc-24">
                        </label>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="col-lg-12 margin-tb mt-4">
            <div class="d-flex justify-content-center">
                <a class=" btn btn-primary px-5" href="{{route('allshop')}}"> View All</a>
            </div>
        </div>
    </div>
    {{-- akhir rekomendation --}}
</div>
</div>
@endsection
