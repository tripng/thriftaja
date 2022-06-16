@extends('landingpage.index')
@section('content')
<div class="container">
    <div id="shoppingCart" class="py-4">
        <h3 class="font-weight-bold">Your Shopping Cart</h3>
        <div class="row mt-4">
            <div class="col-6">
                <h5 class="font-weight-bold">Product</h5>
            </div>
            <div class="col-3">
                <h5 class="font-weight-bold">Quantity</h5>
            </div>
            <div class="col-3">
                <h5 class="font-weight-bold">Total</h5>
            </div>
        </div>
        <hr>
        <div class="row mt-4">
            <div class="col-6">
                <div class="d-flex mt-3">
                    <img src="{{ asset('img/projek/l1.jpg') }}" alt="" class="w-50 mr-4">
                    <div>
                        <h5 class="font-weight-bold">Xiaomi Mi 10</h5>
                        <div class="mt-2">Basic white vase Beautiful and simple this is one for the classics</div>
                        <div class="font-weight-bold mt-2">$85</div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="d-flex align-items-center mt-2">
                    <button class="btn mr-2">-</button>
                    <div class="mr-2 font-weight-bold">1</div>
                    <button class="btn">+</button>
                </div>
            </div>
            <div class="col-3">
                <h5 class="mt-3">$85</h5>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-6">
                <div class="d-flex mt-3">
                    <img src="{{ asset('img/projek/l1.jpg') }}" alt="" class="w-50 mr-4">
                    <div>
                        <h5 class="font-weight-bold">Basic White Phase</h5>
                        <div class="mt-2">Basic white vase Beautiful and simple this is one for the classics</div>
                        <div class="font-weight-bold mt-2">$85</div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="d-flex align-items-center mt-2">
                    <button class="btn mr-2">-</button>
                    <div class="mr-2 font-weight-bold">1</div>
                    <button class="btn">+</button>
                </div>
            </div>
            <div class="col-3">
                <h5 class="mt-3">$85</h5>
            </div>
        </div>
        <hr>
        <div class="d-flex justify-content-end">
            <div>
                <h4>Subtotal $210</h4>
                <p class="mt-2">Taxes and shipping are calculated at checkout</p>
                <a href="#" class="btn bg-purple rounded-0 text-white" style="width: 180px;">Go to checkout</a>
            </div>
        </div>
    </div>
</div>
@endsection