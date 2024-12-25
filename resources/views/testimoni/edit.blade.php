@extends('layouts.landing')

@section('title','Landing Page')

@section('content')
<div class="bg-gray-50 min-h-screen py-10">
    <!-- Heading -->
    <div class="text-center mb-8">
        <h2 class="text-3xl font-extrabold text-orange-500 leading-tight">
            {{ __('Edit Testimoni') }}
        </h2>
        <p class="text-gray-600 text-sm mt-2">Update your testimonial to help us improve!</p>
    </div>

    <!-- Form Container -->
    <div class="max-w-3xl mx-auto p-8 bg-white rounded-xl shadow-2xl">
        <form method="POST" action="{{ route('testimoni.update', $testimoni->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT') <!-- Method PUT for updating -->

            <!-- Nama -->
            <div class="mb-6">
                <label for="nama" class="block text-sm font-medium text-gray-800">Nama</label>
                <input type="text" name="nama" id="nama" value="{{ old('nama', $testimoni->nama) }}"
                    class="mt-2 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
                <x-input-error :messages="$errors->get('nama')" class="mt-2" />
            </div>

            <!-- Isi Testimoni -->
            <div class="mb-6">
                <label for="isi" class="block text-sm font-medium text-gray-800">Isi Testimoni</label>
                <textarea name="isi" id="isi" rows="4"
                    class="mt-2 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-orange-500">{{ old('isi', $testimoni->isi) }}</textarea>
                <x-input-error :messages="$errors->get('isi')" class="mt-2" />
            </div>

            <!-- Gambar -->
            <div class="mb-6">
                <label for="gambar" class="block text-sm font-medium text-gray-800">Gambar</label>
                <input type="file" name="gambar" id="gambar" class="mt-2 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
                @if($testimoni->gambar)
                    <p class="text-sm text-gray-600 mt-2">Current Image: <img src="{{ Storage::url($testimoni->gambar) }}" alt="Current Testimonial Image" class="w-20 h-20 object-cover rounded-md mt-2"></p>
                @endif
                <x-input-error :messages="$errors->get('gambar')" class="mt-2" />
            </div>

            <!-- Submit Button -->
            <div class="flex justify-end">
                <x-primary-button class="px-6 py-3 bg-orange-600 text-white rounded-lg hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-orange-500">
                    Simpan Perubahan
                </x-primary-button>
            </div>
        </form>
    </div>
</div>
@endsection
