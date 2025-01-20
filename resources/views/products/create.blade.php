@extends('layouts.landing')

@section('title','Landing Page')

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
            <input type="file" name="gambar" class="form-control-file btn-block mt-3 mb-3" id="gambar" required>
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
            <select name="category" class="form-control">
                    <option value="">Masukkan Kategori</option>
                    <option value="Coffe">Coffe</option>
                    <option value="Hot Coffe">Hot Coffe</option>
                    <option value="Milk" >Milk</option>
                    <option value="Food" >Food</option>
                    <option value="Snaks" >Snacks</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary btn-block mt-3 mb-3">Buat Produk</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary btn-block mt-3 mb-3">Kembali</a>
    </form>
</div>
@endsection