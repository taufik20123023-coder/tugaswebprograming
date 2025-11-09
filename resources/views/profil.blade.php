@extends('layouts.main')

@section('title', 'Profil')

@section('content')
<div class="text-center">
    <h2>Profil Dosen</h2>
    <p><strong>Nama:</strong> {{ $nama }}</p>
    <p><strong>NIDN:</strong> {{ $nidn }}</p>
    <p><strong>Prodi:</strong> {{ $prodi }}</p>
</div>
@endsection
