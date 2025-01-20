@extends('layouts.landing')

@section('title','Landing Page')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4 text-center">Edit Produk</h1>

    <form action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Nama Produk</label>
            <input type="text" name="name" value="{{ $product->name }}" class="form-control " id="name" required>
        </div>

        <div class="form-group">
            <label for="gambar">Gambar Produk</label>
            <input type="file" name="gambar" class="form-control-file btn-block mt-3 mb-3" id="gambar">
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
        <select name="category" class="form-control">
        <option value="">Masukkan Kategori</option>
                    <option value="Coffe">Coffe</option>
                    <option value="Hot Coffe">Hot Coffe</option>
                    <option value="Milk" >Milk</option>
                    <option value="Food" >Food</option>
                    <option value="Snaks" >Snacks</option>
            </select>
            
        </div>

        <button type="submit" class="btn btn-warning btn-block mt-3 mb-3">Perbarui Produk</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary btn-block mt-3 mb-3">Kembali</a>
    </form>
</div>
@endsection