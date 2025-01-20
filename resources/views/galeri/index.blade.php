@extends('layouts.landingAdmin')

@section('title','Landing Page')

@section('content')
<h1 class="text-2xl font-bold text-gray-800 mb-4">Setting Galeri</h1>
    <div class="max-w-6xl mx-auto p-4">
        <!-- Tombol Tambah Galeri -->
        <a href="{{ route('galeriControl.create') }}" class="inline-flex items-center px-4 py-2 bg-blue-500 text-white text-sm font-medium rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition mb-4">
            Tambah Galeri
        </a>

        <!-- Pesan Sukses -->
        @if(session('success'))
            <div class="alert alert-success mb-4 bg-green-500 text-white p-4 rounded-md">{{ session('success') }}</div>
        @endif

        <!-- Galeri Tabel -->
        <div class="overflow-hidden bg-white shadow-md rounded-lg">
            <table class="table table-striped table-bordered w-full">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="p-2 text-left">No</th>
                        <th class="p-2 text-left">Gambar</th>
                        <th class="p-2 text-left">Judul</th>
                        <th class="p-2 text-left">Dibuat</th>
                        <th class="p-2 text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($items as $index => $galeri)
                    <tr class="border-t border-b hover:bg-gray-50">
                        <td class="p-2">{{ $index + 1 }}</td>
                        <td class="p-2">
                            <img src="{{ asset('storage/' . $galeri->image) }}"
                                 class="max-h-24 object-cover"
                                 alt="{{ $galeri->title }}">
                        </td>
                        <td class="p-2">{{ $galeri->title }}</td>
                        <td class="p-2">{{ $galeri->timespan }}</td>
                        <td class="p-2">
                            <a href="{{ route('galeriControl.edit', $galeri->id) }}" class="inline-flex items-center px-4 py-2 bg-yellow-500 text-white text-sm font-medium rounded-md hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500 transition">
                                Edit
                            </a>
                            <form action="{{ route('galeriControl.destroy', $galeri->id) }}" method="POST" class="inline ml-2" onsubmit="return confirm('Apakah Anda yakin ingin menghapus galeri ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="inline-flex items-center px-4 py-2 bg-red-500 text-white text-sm font-medium rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
