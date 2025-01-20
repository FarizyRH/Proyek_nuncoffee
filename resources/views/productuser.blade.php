@extends('layouts.landing')

@section('title', 'Landing Page')

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
                    <option value="Coffe" {{ request()->category == 'Coffe' ? 'selected' : '' }}>Coffe</option>
                    <option value="Hot Coffe" {{ request()->category == 'Hot Coffe' ? 'selected' : '' }}>Hot Coffe</option>
                    <option value="Milk" {{ request()->category == 'Milk' ? 'selected' : '' }}>Milk</option>
                    <option value="Food" {{ request()->category == 'Food' ? 'selected' : '' }}>Food</option>
                    <option value="Snaks" {{ request()->category == 'Snaks' ? 'selected' : '' }}>Snaks</option>
                </select>
            </div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-primary">Cari</button>
                @if (auth()->user()->role === 'admin')
                    <a href="{{ route('products.create') }}" class="btn btn-primary">Buat Produk</a>
                @endif
            </div>
        </div>
    </form>

    <!-- Menampilkan Produk Berdasarkan Kategori -->
    <section class="services-one services-one--services">
        @foreach ($products->groupBy('category') as $categoryName => $categoryProducts)
            <!-- Nama Kategori -->
            <div class="mb-4">
                <h2 class="text-center" style="border-bottom: 1px dashed #ccc; padding-bottom: 10px;">{{ $categoryName }}</h2>
            </div>

            <!-- Produk dalam Kategori -->
            <div class="row justify-content-center">
                @foreach ($categoryProducts as $product)
                    <div class="col-xl-4 col-lg-6 col-md-6 mb-4">
                        <div class="services-one__single" style="border-radius: 8px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                            <div class="row justify-content-center">
                                <div class="col-12 text-center">
                                    <div class="services-one__single-inner" style="background-color: #f4f1e1; border-radius: 8px; padding: 15px;">
                                        <div class="services-one__single-content">
                                            <h3><a href="{{ route('products.show', $product->id) }}" class="text-dark">{{ $product->name }}</a></h3>
                                            
                                            <!-- Gambar Produk -->
                                            <div class="mb-3">
                                                <img src="{{ asset('storage/' . $product->gambar) }}" alt="Image of {{ $product->name }}" class="img-fluid" style="max-width: 150px; height: auto; border-radius: 8px; display: block; margin: 0 auto;">
                                            </div>
                                            
                                            <p><strong>Deskripsi:</strong> {{ $product->description }}</p>
                                            <p><strong>Harga:</strong> {{ $product->price }}</p>
                                            <p><strong>Kategori:</strong> {{ $product->category }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Garis Putus-Putus Setelah Kategori -->
            <div class="my-4" style="border-bottom: 1px dashed #ccc;"></div>
        @endforeach

        <!-- Paginasi Produk -->
        <div class="d-flex justify-content-center mt-4">
            {{ $products->links() }}
        </div>
    </section>
</div>
@endsection
