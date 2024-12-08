@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>{{ $product->name }}</h1>

    <img src="{{ asset('storage/' . $product->gambar) }}" alt="Gambar Produk" class="img-fluid">
    <p>{{ $product->description }}</p>
    <p>Harga: {{ $product->price }}</p>
    <p>Kategori: {{ $product->category }}</p>
</div>
@endsection
