<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BahanController ;
use App\Http\Controllers\ProdukController;

Route::get('/', function () {return view('bahan');});

Route::get('/bahan', [BahanController::class, 'bahans'])->name('bahan.bahans');
Route::get('/bahantampil', [BahanController::class, 'tampil'])->name('bahan.tampil');
Route::post('/bahan/simpan', [BahanController::class, 'simpan'])->name('bahan.simpan'); 
Route::delete('/bahan/{id}', [BahanController::class, 'hapus'])->name('bahan.hapus');


Route::get('/produk', [ProdukController::class, 'produks'])->name('produk.produks');
Route::get('/produktampil', [ProdukController::class, 'tampil'])->name('produk.tampil');
Route::post('/produk/simpan', [ProdukController::class, 'simpan'])->name('produk.simpan');
Route::delete('/produk/{id}', [ProdukController::class, 'hapus'])->name('produk.hapus');
