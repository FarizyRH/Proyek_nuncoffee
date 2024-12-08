@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4 text-center">Edit Produk</h1>

    <form action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Nama Produk</label>
            <input type="text" name="name" value="{{ $product->name }}" class="form-control" id="name" required>
        </div>

        <div class="form-group">
            <label for="gambar">Gambar Produk</label>
            <input type="file" name="gambar" class="form-control-file" id="gambar">
        </div>

        <div class="form-group">
            <label for="description">Deskripsi</label>
            <textarea name="description" class="form-control" id="description" rows="4" required>{{ $product->description }}</textarea>
        </div>

        <div class="form-group">
            <label for="price">Harga</label>
            <input type="text" name="price" value="{{ $product->price }}" class="form-control" id="price" required>
        </div>

        <div class="form-group">
            <label for="category">Kategori</label>
            <input type="text" name="category" value="{{ $product->category }}" class="form-control" id="category" required>
        </div>

        <button type="submit" class="btn btn-warning btn-block">Perbarui Produk</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary btn-block mt-2">Kembali</a>
    </form>
</div>
@endsection
