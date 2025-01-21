@extends('layouts.landingAdmin')

@section('title', 'Edit Footer')

@section('content')
    <div class="max-w-4xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Edit Footer</h1>

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

        <!-- Form Edit Footer -->
        <form action="{{ route('footer.update', $footerData->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Input Alamat -->
            <div class="mb-4">
                <label for="alamat" class="block text-sm font-medium">Alamat</label>
                <input
                    type="text"
                    id="alamat"
                    name="alamat"
                    value="{{ old('alamat', $footerData->alamat) }}"
                    class="mt-1 block w-full border-gray-300 rounded-md focus:ring focus:ring-blue-300 focus:outline-none"
                    required />
            </div>

            <!-- Input Nomor Telepon -->
            <div class="mb-4">
                <label for="nomor_telepon" class="block text-sm font-medium">Nomor Telepon</label>
                <input
                    type="text"
                    id="nomor_telepon"
                    name="nomor_telepon"
                    value="{{ old('nomor_telepon', $footerData->nomor_telepon) }}"
                    class="mt-1 block w-full border-gray-300 rounded-md focus:ring focus:ring-blue-300 focus:outline-none"
                    required />
            </div>

            <!-- Input Instagram Link -->
            <div class="mb-4">
                <label for="instagram_link" class="block text-sm font-medium">Instagram Link</label>
                <input
                    type="text"
                    id="instagram_link"
                    name="instagram_link"
                    value="{{ old('instagram_link', $footerData->instagram_link) }}"
                    class="mt-1 block w-full border-gray-300 rounded-md focus:ring focus:ring-blue-300 focus:outline-none"
                    required />
            </div>

            <!-- Input Gojek Link -->
            <div class="mb-4">
                <label for="gojek_link" class="block text-sm font-medium">Gojek Link</label>
                <input
                    type="text"
                    id="gojek_link"
                    name="gojek_link"
                    value="{{ old('gojek_link', $footerData->gojek_link) }}"
                    class="mt-1 block w-full border-gray-300 rounded-md focus:ring focus:ring-blue-300 focus:outline-none"
                    required />
            </div>

            <!-- Input Gambar -->
            <div class="mb-4">
                <label for="image" class="block text-sm font-medium">Upload Gambar</label>
                <input
                    type="file"
                    id="image"
                    name="image"
                    class="mt-1 block w-full border-gray-300 rounded-md focus:ring focus:ring-blue-300 focus:outline-none"
                    accept="image/*" />

                <!-- Tampilkan gambar lama jika ada -->
                @if($footerData->image)
                    <p class="mt-2">Gambar Saat Ini:</p>
                    <img src="{{ asset('storage/' . $footerData->image) }}" alt="Current Image" class="object-contain w-full h-full">
                @endif
            </div>

            <!-- Tombol Submit -->
            <button
                type="submit"
                class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded shadow">
                Update Footer
            </button>
        </form>
    </div>
@endsection
