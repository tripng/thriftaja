@extends('landingpage.index')
@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-7">
            <div class="checkout__order">
                <h4 class="order__title text-center">Transaksi Berhasil ✅</h4>
                <div class="checkout__order__products font-weight-bold">No.Pesanan: {{$transaksi->order_number}}</div>
                <div class="checkout__total__all">
                    <div class="row">
                        <div class="col-md-6">Total Pembayaran
                            <h6 class="font-weight-bold mt-2">{{$transaksi->total}}</h6>
                        </div>
                        <div class="col-md-6">Waktu Pembayaran
                            <h6 class="font-weight-bold mt-2">{{$transaksi->created_at}}</h6>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="">Rincian Pengiriman </div>
                    <h6 class="font-weight-bold mt-2">{{$transaksi->rincian_pengiriman->name}} {{$transaksi->rincian_pengiriman->address}} {{$transaksi->rincian_pengiriman->city}} {{$transaksi->rincian_pengiriman->detail_address}}, {{$transaksi->rincian_pengiriman->postcode}}, {{$transaksi->rincian_pengiriman->handphone}}</h6>
                </div>
                <div class="checkout__total__all">
                    <div class="checkout__order__products">Product <span>Total</span></div>
                    <ul class="checkout__total__products">
                        @foreach($order as $o)
                        <li>{{$o->amount}} {{$o->barang->nama_barang}} <span>Rp {{number_format($o->price,0,',','.')}}</span></li>
                        @endforeach
                    </ul>
                    <div class="checkout__order__products"><span>{{$transaksi->total}}</span></div>
                </div>
                {{-- <div class="checkout__input__checkbox">
                    <label for="acc-or">
                        Create an account?
                        <input type="checkbox" id="acc-or">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do eiusmod tempor incididunt
                    ut labore et dolore magna aliqua.</p> --}}
                {{-- <div class="checkout__input__checkbox">
                    <label for="payment">
                        Check Payment
                        <input type="checkbox" id="payment">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="checkout__input__checkbox">
                    <label for="paypal">
                        Paypal
                        <input type="checkbox" id="paypal">
                        <span class="checkmark"></span>
                    </label>
                </div> --}}
                <a href="{{route('pesanan_saya')}}" class="site-btn mx-auto text-center">Oke</a>
            </div>
        </div>
    </div>
</div>

@endsection