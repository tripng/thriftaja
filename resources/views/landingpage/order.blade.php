@extends('landingpage.index')
@section('content')
<div class="container">
    @foreach($transaksi as $t)
    @php
        $barang = App\Models\RincianBarang::where('order_number','=',$t->order_number)->get()->flatten();
        @endphp
        <div class="card my-3">
            @foreach($barang as $b)
            @php
                $cek = Illuminate\Support\Carbon::create($t->created_at)->addMinutes(15) > now();
            @endphp
            <h5 class="card-header">{{$b->barang->category->name}}</h5>
            <div class="card-body d-flex">
                <img src="{{asset('storage/image/'.$b->barang->foto)}}" class="w-100 h-100 col-3" alt="">
                <div class="isi col-6">
                    <h5 class="card-title">{{$b->barang->nama_barang}}</h5>
                    <p class="card-text">{{$t->created_at}}</p>
                </div>
                <div class="sub col-3">
                    <p>Harga : Rp. {{number_format($b->barang->harga,0,',','.')}}</p>
                    <p>Jumlah : x{{$b->amount}}</p>
                    <hr>
                    <p class="font-weight-bold">Total : Rp. {{number_format($b->price,0,',','.')}}</p>
                    <a href="{{route('detail',['barang' => $b->barang->slug])}}" class="btn btn-primary">Lihat Barang</a>
                    @if($cek)
                        <form class="d-flex" action="{{route('cancel',['barang' => $b->barang->slug])}}" method="post">
                            @csrf
                            <input type="hidden" value={{$t->order_number}} name="transaksi">
                            <button class="btn btn-sm btn-danger mt-2">Batal Pembelian</button>
                            <p class="timer  ml-3 text-danger align-self-center" title="{{Illuminate\Support\Carbon::create($t->created_at)->addMinutes(15)}}"></p>
                        </form>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    @endforeach
</div>

<script>
    const time = document.querySelectorAll(".timer");
    // Set the date we're counting down to
    // Update the count down every 1 second
    for(let i=0; i<={{$transaksi->count()-1}}; i++){
        let countDownDate = new Date(time[i].title).getTime();
        let x = setInterval(function() {
            // Get today's date and time
            var now = new Date().getTime();
            
            // Find the distance between now and the count down date
            let distance = countDownDate - now;
            
            // Time calculations for days, hours, minutes and seconds
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            // Output the result in an element with id="demo"
            time[i].innerHTML = minutes + "m" + seconds + "s ";
            
        }, 1000);
    }  
    
</script>
@endsection