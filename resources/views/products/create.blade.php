@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4 text-center">Buat Produk Baru</h1>

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Nama Produk</label>
            <input type="text" name="name" class="form-control" id="name" required>
        </div>

        <div class="form-group">
            <label for="gambar">Gambar Produk</label>
            <input type="file" name="gambar" class="form-control-file" id="gambar" required>
        </div>

        <div class="form-group">
            <label for="description">Deskripsi</label>
            <textarea name="description" class="form-control" id="description" rows="4" required></textarea>
        </div>

        <div class="form-group">
            <label for="price">Harga</label>
            <input type="text" name="price" class="form-control" id="price" required>
        </div>

        <div class="form-group">
            <label for="category">Kategori</label>
            <input type="text" name="category" class="form-control" id="category" required>
        </div>

        <button type="submit" class="btn btn-primary btn-block">Buat Produk</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary btn-block mt-2">Kembali</a>
    </form>
</div>
@endsection
