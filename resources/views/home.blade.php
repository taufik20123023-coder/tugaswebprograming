@extends('layouts.main')

@section('title', 'Home')

@section('content')
<h2 class="text-center mb-4">Daftar Produk</h2>

<div class="row justify-content-center">
    @foreach($produks as $produk)
    <div class="col-md-4 mb-4">
        <div class="card text-center">
            <img src="{{ $produk['gambar'] }}" class="card-img-top" alt="{{ $produk['nama'] }}">
            <div class="card-body">
                <h5 class="card-title">{{ $produk['nama'] }}</h5>
                <p class="card-text text-muted">Rp {{ $produk['harga'] }}</p>
                <a href="#" class="btn btn-primary">Beli Sekarang</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
