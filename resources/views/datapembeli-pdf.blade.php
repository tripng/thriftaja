<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>A Fancy Table</h1>

<table id="customers">
  <tr>
    <th>nama</th>
    <th>kategori</th>
    <th>harga</th>
    <th>stok</th>
  </tr>
   @foreach ($data as $t)
                                @php
                                    $namabarang = App\Models\RincianBarang::where('order_number','=',$t->order_number)->get()->flatten();
                                @endphp
                                <tr>
                                    <td> {{ $loop->iteration }}</td>
                                    <td> {{ $t->user->name}}</td>
                                    <td> {{ $t->created_at}}</td>
                                    <td>{{$t->total}}</td>
                                    <td>{{ $t->notes}}</td>
                                    <td>
                                        @foreach($namabarang as $s)
                                            {{$s->barang->nama_barang}} <br><br>
                                        @endforeach
                                    </td>
                                    <td>{{ $t->order_number}}</td>

    @endforeach
</table>

</body>
</html>


