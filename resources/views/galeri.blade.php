@extends('layouts.main')

@section('title', 'Galeri')

@section('content')
<h2 class="text-center mb-4">Galeri Produk</h2>
<div class="row">
    <div class="col-md-4">
        <img src="/sepatu.jpg" class="img-fluid rounded" alt="Sepatu">
    </div>
    <div class="col-md-4">
        <img src="/tas.jpg" class="img-fluid rounded" alt="Tas">
    </div>
    <div class="col-md-4">
        <img src="/topi.jpg" class="img-fluid rounded" alt="Topi">
    </div>
</div>
@endsection
