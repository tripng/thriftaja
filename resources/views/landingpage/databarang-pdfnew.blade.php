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

<h1>Dokumen Data Barang</h1>

<table id="customers">
  <tr>
    <th>Nama</th>
    <th>Kategori</th>
    <th>Harga</th>
    <th>Stok</th>
  </tr>
  @foreach($data as $m)
  <tr>
      <td> {{ Str::words($m->nama_barang,3)}}</td>
      <td> {{ $m->category->name}}</td>
      <td>Rp {{ number_format($m->harga,0,',','.')}}</td>
      <td>{{ $m->stok}}</td>
  </tr>
  @endforeach
</table>

</body>
</html>


