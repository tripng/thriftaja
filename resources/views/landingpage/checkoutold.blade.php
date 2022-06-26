@extends('landingpage.index')
@section('content')
<div class="container">
    <div id="checkout" class="py-4">
        <h3 class="font-weight-bold">Checkout</h3>
        <h5 class="font-weight-bold mt-5">Shipping Address</h5>

        <div class="row">
            <div class="col-md-6">
                <hr>
                <h5 class="font-weight-bold">Muhammad Asharul (Home)</h5>
                <div class="mt-2">085702363509</div>
                <p class="mt-2">JLN PRINGGONDANI 7 BSP 2 RT 4 RW 11 BLOK L 5 KARANGGENENG BOYOLALI
                    Boyolali, Kab. Boyolali, 57312</p>
                <button class="btn bg-purple rounded-0 text-white mt-3" style="width: 200px;">Choose Other Address</button>
                <hr>
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('img/projek/l1.jpg') }}" alt="">
                    </div>
                    <div class="col-md-6">
                        <h5 class="font-weight-bold">Xiaomi Mi 10</h5>
                        <p>A timeless ceramic vase with
                            a tri color grey glaze.</p>
                        <div class="font-weight-bold" style="font-size: 18px;">$85</div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h5 class="font-weight-bold text-center">Payment Transfer</h5>
                <img src="{{ asset('img/logo-bca.png') }}" alt="" class="mt-3">
                <div class="mt-4">PT ThriftAja Membangun Indonesia (Admin Ghifari)</div>
                <div class="font-weight-bold mt-1">0280256315</div>

                <img src="{{ asset('img/logo-mandiri.png') }}" alt="" class="mt-3">
                <div class="mt-4">PT ThriftAja Membangun Indonesia (Admin Riris)</div>
                <div class="font-weight-bold mt-1">0280256315</div>
            </div>
        </div>

        <div class="d-flex justify-content-center mt-5">
            <button type="button" class="btn bg-purple rounded-0 text-white" data-toggle="modal" data-target="#paymentConfirmation" style="width: 200px;">
                Payment Confirmation
            </button>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="paymentConfirmation" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('img/icon/check-icon.png') }}" alt="" style="width: 75px;">
                </div>
                <h4 class="text-center font-weight-bold mt-4">Thank You!</h4>
                <h5 class="mt-4 text-center">Have you made a payment?</h5>
                <div class="d-flex justify-content-center mt-4">
                    <button type="button" class="btn bg-purple rounded-0 text-white mr-4" style="width: 150px;">Already</button>
                    <button type="button" class="btn btn-secondary rounded-0" data-dismiss="modal" style="width: 150px;">Not Yet</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection