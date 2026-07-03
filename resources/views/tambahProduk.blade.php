<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
</head>
<body>

<h1>Tambah Produk</h1>

@if(session('success'))
    <div style="color:green;">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div style="color:red;">
        {{ session('error') }}
    </div>
@endif

<form action="{{ route('produk.submit') }}" method="POST" enctype="multipart/form-data">

    @csrf

    <label>Nama Produk</label><br>
    <input type="text" name="nama"><br><br>

    <label>Harga</label><br>
    <input type="number" name="harga"><br><br>

    <label>Stok</label><br>
    <input type="number" name="stok"><br><br>

    <label>Kategori</label><br>
    <input type="text" name="kategori"><br><br>

    <label>Gambar</label><br>
    <input type="file" name="gambar"><br><br>

    <button type="submit">Simpan Produk</button>

</form>

</body>
</html>