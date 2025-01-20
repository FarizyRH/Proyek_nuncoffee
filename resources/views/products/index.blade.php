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
                    <option value="Coffe" {{ request()->category == 'coffe' ? 'selected' : '' }}>Coffe</option>
                    <option value="Milk" {{ request()->category == 'milk' ? 'selected' : '' }}>Milk</option>
                    <option value="Food" {{ request()->category == 'food' ? 'selected' : '' }}>Food</option>
                </select>
            </div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-primary">Cari</button>
                <a href="{{ route('products.create') }}" class="inline-flex items-center px-4 py-2 bg-blue-500 text-white text-sm font-medium rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition mb-4">
                    Tambah Product
                </a>
            </div>
        </div>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Gambar</th>
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
                    <td>
                         <img src="{{ asset('storage/' . $product->gambar) }}"
                                 alt="Gambar Produk"
                                 class="img-fluid rounded"
                                 style="max-width: 100px;">
                    </td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->category }}</td>
                    <td>
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
