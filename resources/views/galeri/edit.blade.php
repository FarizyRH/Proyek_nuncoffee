@extends('layouts.landingAdmin')

@section('title','Landing Page')

@section('content')
    <div class="max-w-4xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Edit Galeri</h1>

        <!-- Menampilkan Pesan Error -->
        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-4 rounded mb-4">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Form Edit Galeri -->
        <form action="{{ route('galeriControl.update', $galeri->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Input Judul -->
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium">Judul</label>
                <input
                    type="text"
                    id="title"
                    name="title"
                    value="{{ old('title', $galeri->title) }}"
                    class="mt-1 block w-full border-gray-300 rounded-md focus:ring focus:ring-blue-300 focus:outline-none"
                    required />
            </div>

            <!-- Input Gambar -->
            <div class="mb-4">
                <label for="image" class="block text-sm font-medium">Gambar Baru</label>
                <input
                    type="file"
                    id="image"
                    name="image"
                    class="mt-1 block w-full border-gray-300 rounded-md focus:outline-none" />

                <!-- Pratinjau Gambar -->
                @if($galeri->image)
                    <div class="mt-3">
                        <span class="text-sm text-gray-500">Gambar Saat Ini:</span>
                        <img
                            src="{{ asset('storage/' . $galeri->image) }}"
                            alt="{{ $galeri->title }}"
                            class="mt-2 rounded shadow w-48 h-32 object-cover" />
                    </div>
                @endif
            </div>

            <!-- Tombol Submit -->
            <button
                type="submit"
                class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded shadow">
                Update
            </button>
        </form>
    </div>
@endsection
