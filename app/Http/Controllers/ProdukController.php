<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Bahan;

class ProdukController extends Controller
{
    public function produks()
    {
        $produk = Produk::all();
        $bahan = Bahan::all();
        return view('produk', compact('produk', 'bahan'));
    }

    public function tampil()
    {
        $produk = Produk::all();
        return view('isiproduk', compact('produk'));
    }

    public function simpan(Request $request)
    {
        Produk::create($request->all());
        return redirect()->route('produk.produks')->with('success', 'produk berhasil ditambahkan!');
    }

    public function hapus($id)
    {
        Produk::findOrFail($id)->delete();
        return redirect()->route('produk.produks')->with('success', 'produk berhasil dihapus!');
    }
}
