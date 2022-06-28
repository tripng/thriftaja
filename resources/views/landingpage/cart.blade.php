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
                                        <h6>Stok {{$c->barang->stok}}</h6>
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
                </div>
            </div>
            <div class="col-lg-4">
                <div class="cart__total">
                    <h6>Cart total</h6>
                    <ul>
                        <li>Total <span id="total_harga">Rp {{number_format($count_barang->sum(),0,',','.')}}</span></li>
                    </ul>
                    <form method="post" action="{{route('checkout')}}">
                        @csrf
                        <input type="hidden" name="id" value="
                        @foreach($cart as $c){{"$c->id".','}}@endforeach
                        ">
                        <input type="hidden" name="quantity" id="quantity_item" value="">
                        <input type="hidden" name="total" id="value_total" value="">
                        <input type="hidden" name="harga_barang" id="harga_barang" value="">
                        <button class="primary-btn">Proceed to checkout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    const jumlah = document.querySelectorAll('.clsjumlah');
    const total = document.querySelectorAll('.clstotal');
    const total_harga = document.querySelector('#total_harga');
    const quantity_item = document.querySelector('#quantity_item');
    const harga_barang = document.querySelector('#harga_barang');
    const value_total = document.querySelector('#value_total');


    let hargaLive = [];
    let quantity = [];
    let hargaperbarang = [];
        for(let i=0; i<={{$count_barang->count()-1}}; i++){
            hargaLive.push(Number(total[i].innerText.replace(/([.]|Rp)/gi,"")));
            quantity.push(jumlah[i].value);
            hargaperbarang.push(total[i].innerHTML);
        }

        const rupiah = (number)=>{
        return new Intl.NumberFormat("id-ID", {
        style: "currency",
        currency: "IDR",
        maximumFractionDigits: 0,
        }).format(number);
    }
    value_total.value = rupiah(hargaLive.reduce((pv, cv) => pv + cv, 0));
    quantity_item.value = quantity.join(',');
    harga_barang.value = hargaperbarang.join(',');
    function totalCount(x,harga){
        jumlahHarga = harga*Number(jumlah[x].value)
        total[x].innerHTML = rupiah(jumlahHarga);
        hargaLive[x] = Number(jumlahHarga);
        total_harga.innerHTML = rupiah(hargaLive.reduce((pv, cv) => pv + cv, 0));
        quantity[x] = jumlah[x].value;
        hargaperbarang[x] = total[x].innerText;
        quantity_item.value = quantity.join(',');
        harga_barang.value = hargaperbarang.join(',');
        value_total.value = rupiah(hargaLive.reduce((pv, cv) => pv + cv, 0));
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