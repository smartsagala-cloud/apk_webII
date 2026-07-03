<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Produk</title>
</head>
<body>

<h1>Data Produk</h1>

<table border="1" cellpadding="10" cellspacing="0">

<tr>
    <th>Nama</th>
    <th>Harga</th>
    <th>Stok</th>
    <th>Kategori</th>
    <th>Gambar</th>
</tr>

@foreach($produks as $produk)

<tr>

    <td>{{ $produk->nama }}</td>

    <td>{{ $produk->harga }}</td>

    <td>{{ $produk->stok }}</td>

    <td>{{ $produk->kategori }}</td>

    <td>

        <img src="{{ asset('storage/'.$produk->gambar) }}" width="100">

    </td>

</tr>

@endforeach

</table>

</body>
</html>