<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function insert(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
            'kategori' => 'required|string',
            'gambar' => 'required|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $gambarPath = $request->file('gambar')->store('gambar', 'public');

        Produk::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'kategori' => $request->kategori,
            'gambar' => $gambarPath
        ]);

        return redirect()->back()->with('success', 'Produk berhasil ditambahkan.');
    }

    public function index()
    {
        $produks = Produk::all();

        return view('lihatProduk', compact('produks'));
    }
}