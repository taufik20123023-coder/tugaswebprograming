<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;

Route::get('/', function () {
    $produks = [
        ['nama' => 'Sepatu', 'harga' => 120000, 'gambar' => '/sepatu.jpg'],
        ['nama' => 'Tas', 'harga' => 90000, 'gambar' => '/tas.jpg'],
        ['nama' => 'Topi', 'harga' => 45000, 'gambar' => '/topi.jpg'],
    ];
    return view('home', compact('produks'));
});

Route::get('/profil', [ProfilController::class, 'index']);
Route::get('/galeri', function () { return view('galeri'); });
Route::get('/kontak', function () { return view('kontak'); });
