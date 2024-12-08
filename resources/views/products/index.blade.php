@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4 text-center">Daftar Produk</h1>

    <!-- Form pencarian produk -->
    <form action="{{ route('products.index') }}" method="GET" class="mb-4">
        <div class="row">
            <div class="col-md-4">
                <input type="text" name="search" class="form-control" placeholder="Cari produk" value="{{ request()->search }}">
            </div>
            <div class="col-md-4">
                <select name="category" class="form-control">
                    <option value="">Pilih Kategori</option>
                    <option value="coffe" {{ request()->category == 'coffe' ? 'selected' : '' }}>Coffe</option>
                    <option value="noncoffe" {{ request()->category == 'noncoffe' ? 'selected' : '' }}>Non-Coffe</option>
                    <option value="food" {{ request()->category == 'food' ? 'selected' : '' }}>Food</option>
                </select>
            </div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-primary">Cari</button>
            </div>
        </div>
    </form>

    @if (auth()->user()->role === 'admin')
        <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Buat Produk</a>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Kategori</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->category }}</td>
                    <td>
                        <a href="{{ route('products.show', $product) }}" class="btn btn-info btn-sm">Lihat</a>
                        @if (auth()->user()->role === 'admin')
                            <a href="{{ route('products.edit', $product) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $products->links() }}
</div>
@endsection
