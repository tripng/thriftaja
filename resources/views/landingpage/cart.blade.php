@extends('landingpage.index')
@section('content')
<section class="shopping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="shopping__cart__table">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                        @endif
                    @if ($message = Session::get('fail'))
                        <div class="alert alert-danger">
                            <p>{{ $message }}</p>
                        </div>
                        @endif
                    <table>
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cart as $c)
                            <tr>
                                <td class="product__cart__item">
                                    <div class="product__cart__item__pic">
                                        <img src="{{asset('img/shopping-cart/cart-3.jpg')}}" alt="">
                                    </div>
                                    <div class="product__cart__item__text">
                                        <h6>{{$c->barang->nama_barang}}</h6>
                                        <h5>Rp{{number_format($c->barang->harga,0,',','.')}}</h5>
                                    </div>
                                </td>
                                <td class="quantity__item">
                                    <div class="quantity">
                                        <div class="pro-qty-2">
                                            <span class="fa fa-angle-left dec qtybtn" onclick="arrowQty({{$loop->iteration-1}},{{$c->barang->harga}}),'dec'"></span>
                                            <input class="clsjumlah" id="jumlah{{$loop->iteration}}" type="text" value="1" onchange="totalCount({{$loop->iteration-1}},{{$c->barang->harga}})">
                                            <span class="fa fa-angle-right inc qtybtn" onclick="arrowQty({{$loop->iteration-1}},{{$c->barang->harga}},'inc')"></span>
                                        </div>
                                    </div>
                                </td>
                                <td class="cart__price clstotal" id="total{{$loop->iteration}}">Rp {{number_format($c->barang->harga,0,',','.')}}</td>
                                <td class="cart__close"><a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Dari Keranjang?')" href="{{route('des-cart',[auth()->user()->username,$c->id])}}"><i class="fa fa-close"></i></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="continue__btn">
                            <a href="{{route('allshop')}}">Continue Shopping</a>
                        </div>
                    </div>
                    {{-- <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="continue__btn update__btn">
                            <a href="/updatecart"><i class="fa fa-spinner"></i> Update cart</a>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="col-lg-4">
                {{-- <div class="cart__discount">
                    <h6>Discount codes</h6>
                    <form action="#">
                        <input type="text" placeholder="Coupon code">
                        <button type="submit">Apply</button>
                    </form>
                </div> --}}
                <div class="cart__total">
                    <h6>Cart total</h6>
                    <ul>
                        <li>Total <span id="total_harga">Rp {{number_format($count_barang->sum(),0,',','.')}}</span></li>
                    </ul>
                    <a href="#" class="primary-btn">Proceed to checkout</a>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    const jumlah = document.querySelectorAll('.clsjumlah');
    const total = document.querySelectorAll('.clstotal');
    const total_harga = document.querySelector('#total_harga');
    let hargaLive = [];
        for(let i=0; i<={{$count_barang->count()-1}}; i++){
            hargaLive.push(Number(total[i].innerText.replace(/([.]|Rp)/gi,"")));
        }
    const rupiah = (number)=>{
        return new Intl.NumberFormat("id-ID", {
        style: "currency",
        currency: "IDR",
        maximumSignificantDigits : 2,
        }).format(number);
    }
    function totalCount(x,harga){
        jumlahHarga = rupiah(harga*Number(jumlah[x].value))
        total[x].innerHTML = jumlahHarga;
        hargaLive[x] = Number(jumlahHarga.replace(/([.]|Rp)/gi,""));
        total_harga.innerHTML = rupiah(hargaLive.reduce((pv, cv) => pv + cv, 0));
    }

    function arrowQty(x, harga, state){
        var oldValue = jumlah[x].value;
        var newVal = 0;

        if (state == 'inc') {
            newVal = parseFloat(oldValue) + 1;
        } else {
            console.log(newVal)
            if (oldValue > 0) {
                newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }

        jumlah[x].value = newVal;
        totalCount(x,harga)
    }
</script>
@endsection