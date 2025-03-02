<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bahan;

class BahanController extends Controller
{
    public function bahans()
    {
        $bahan = Bahan::all();
        return view('bahan', compact('bahan'));
    }

    public function tampil()
    {
        $bahan = Bahan::all();
        return view('isibahan', compact('bahan'));
    }

    public function simpan(Request $request)
    {
        Bahan::create($request->all());
        return redirect()->route('bahan.bahans')->with('success', 'Bahan berhasil ditambahkan!');
    }

    public function hapus($id)
    {
        Bahan::findOrFail($id)->delete();
        return redirect()->route('bahan.bahans')->with('success', 'Bahan berhasil dihapus!');
    }
}
