<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', [HomeController::class, 'index']);

Route::get('/profil', [HomeController::class, 'profil']);

Route::get('/pendidikan', [HomeController::class, 'pendidikan']);

Route::get('/keahlian', [HomeController::class, 'keahlian']);

use App\Http\Controllers\ProdukController;

Route::get('/tambah-produk', function () {
    return view('tambahProduk');
});

Route::post('/tambah-produk', [ProdukController::class, 'insert'])
    ->name('produk.submit');

Route::get('/data-produk', [ProdukController::class, 'index'])
    ->name('produk.data');