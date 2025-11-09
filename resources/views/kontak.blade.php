@extends('layouts.main')

@section('title', 'Kontak')

@section('content')
<h2 class="text-center mb-4">Hubungi Kami</h2>
<form class="w-50 mx-auto">
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" id="nama" class="form-control" placeholder="Masukkan nama Anda">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" id="email" class="form-control" placeholder="Masukkan email Anda">
    </div>
    <div class="mb-3">
        <label for="pesan" class="form-label">Pesan</label>
        <textarea id="pesan" class="form-control" rows="4" placeholder="Tulis pesan di sini"></textarea>
    </div>
    <button type="submit" class="btn btn-primary w-100">Kirim</button>
</form>
@endsection
