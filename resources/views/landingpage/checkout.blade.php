@extends('landingpage.index')
@section('content')
<style>
    .checkout__input input.is-invalid{
        border-color: rgb(170, 37, 37) !important;
    }
  </style>

<section class="checkout spad">
    <div class="container">
        <div class="checkout__form">
            <form action="{{route('buy')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        {{-- <h6 class="coupon__code"><span class="icon_tag_alt"></span> Have a coupon? <a href="#">Click
                                here</a> to enter your code</h6> --}}
                        <h6 class="checkout__title">Billing Details</h6>
                        {{-- <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Fist Name<span>*</span></p>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Last Name<span>*</span></p>
                                    <input type="text">
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="checkout__input">
                            <p>Country<span>*</span></p>
                            <input type="text">
                        </div> --}}
                        <div class="checkout__input text-dark">
                            <p>Nama<span>*</span></p>
                            @error('name')
                                <h6 class="mt-0 text-danger"><small>{{$message}}</small></h6>
                            @enderror
                            <input type="text" value="{{auth()->user()->name}}" name="name" class="checkout__input__add @error('name') is-invalid @enderror">
                        </div>
                        <div class="checkout__input text-dark">
                            <p>Username<span>*</span></p>
                            <input type="text" value="{{auth()->user()->username}}" disabled class="checkout__input__add @error('username') is-invalid @enderror">
                        </div>
                        <div class="checkout__input">
                            <p>Alamat<span>*</span></p>
                            @error('address')
                                <h6 class="mt-0 text-danger"><small>{{$message}}</small></h6>
                            @enderror
                            <input type="text" placeholder="Nama Jalan" value="{{auth()->user()->alamat}}" name="address" class="checkout__input__add @error('address') is-invalid @enderror">
                            @error('detail_address')
                                <h6 class="mt-0 text-danger"><small>{{$message}}</small></h6>
                            @enderror
                            <input type="text" placeholder="Gedung,No Rumah" name="detail_address" class="@error('detail_address') is-invalid @enderror">
                        </div>
                        <div class="checkout__input">
                            <p>Kota<span>*</span></p>
                            @error('city')
                                <h6 class="mt-0 text-danger"><small>{{$message}}</small></h6>
                            @enderror
                            <input type="text" name="city" value="{{auth()->user()->kota}}" class=" @error('city') is-invalid @enderror ">
                        </div>
                        <div class="checkout__input">
                            <p>Kode Pos<span>*</span></p>
                            @error('postcode')
                                <h6 class="mt-0 text-danger"><small>{{$message}}</small></h6>
                            @enderror
                            <input type="number" value="{{auth()->user()->kode_pos}}" name="postcode" class="@error('postcode') is-invalid @enderror">
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>No Handphone<span>*</span></p>
                                    @error('handphone')
                                        <h6 class="mt-0 text-danger"><small>{{$message}}</small></h6>
                                    @enderror
                                    <input type="text" value="{{auth()->user()->no}}" name="handphone" class="@error('handphone') is-invalid @enderror">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Email<span>*</span></p>
                                    <input type="text" value="{{auth()->user()->email}}" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="checkout__input">
                            <p>Password<span>*</span></p>
                            @error('detail_address')
                                <h6 class="mt-0 text-danger"><small>{{$message}}</small></h6>
                            @enderror
                            <input type="password" name="password" class="@error('address') is-invalid @enderror">
                        </div>
                        {{-- <div class="checkout__input__checkbox">
                            <label for="diff-acc">
                                Note about your order, e.g, special noe for delivery
                                <input type="checkbox" id="diff-acc">
                                <span class="checkmark"></span>
                            </label>
                        </div> --}}
                        <div class="checkout__input">
                            <p>Catatan</p>
                            <input type="text"
                                placeholder="Catatan kepada penjual" name="notes">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="checkout__order">
                            <h4 class="order__title">Your order</h4>
                            <div class="checkout__order__products">Product <span>Total</span></div>
                            <ul class="checkout__total__products">
                                @foreach($items as $item)
                                <li>{{$quantity[$loop->iteration-1]}}x {{$item->nama_barang}} <span>{{$harga[$loop->iteration-1]}}</span></li>
                                @endforeach
                            </ul>
                            <ul class="checkout__total__all">
                                {{-- <li>Subtotal <span>$750.99</span></li> --}}
                                <li>Total <span>{{$total}}</span></li>
                            </ul>
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
                            <input type="hidden" name="total_payment" value="{{$total}}">
                            <input type="hidden" name="id" value="{{auth()->user()->id}}">
                            <input type="hidden" name="jumlah" value={{$quantity->implode(',')}}>
                            <button class="site-btn">PLACE ORDER</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection