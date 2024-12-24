@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- Nama Produk -->
            <h1 class="mb-4 text-center text-uppercase">{{ $product->name }}</h1>

            <!-- Tabel Detail Produk -->
            <table class="table table-bordered table-striped">
                <thead class="thead-light">
                    <tr>
                        <th scope="col" colspan="2" class="text-center">Detail Produk</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row" class="text-nowrap">Gambar Produk</th>
                        <td class="text-center">
                            <img src="{{ asset('storage/' . $product->gambar) }}" 
                                 alt="Gambar Produk" 
                                 class="img-fluid rounded" 
                                 style="max-width: 200px; height: auto;">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Deskripsi</th>
                        <td>{{ $product->description }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Harga</th>
                        <th><strong>Harga:</strong> {{ $product->price }}</th>
                    </tr>
                    <tr>
                        <th scope="row">Kategori</th>
                        <td>{{ $product->category }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
