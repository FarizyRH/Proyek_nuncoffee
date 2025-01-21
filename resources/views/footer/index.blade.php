@extends('layouts.landingAdmin')

@section('title','Landing Page')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h2 class="text-3xl font-bold mb-6">Footer Data</h2>
    <div class="overflow-x-auto bg-white shadow-md rounded-lg">
        <table class="min-w-full table-auto">
            <thead>
                <tr class="bg-gray-100 text-left">
                    <th class="px-6 py-3 text-lg font-semibold text-gray-700">Edit Nama</th>
                    <th class="px-6 py-3 text-lg font-semibold text-gray-700">Edit Link</th>
                    <th class="px-6 py-3 text-lg font-semibold text-gray-700">Gambar</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-t">
                    <!-- Kolom Kiri untuk Edit ID 1 -->
                    <td class="px-6 py-4 text-sm text-gray-600">
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Nama</h4>
                        <p><strong class="font-medium">Alamat:</strong> {{ $footerData1->alamat }}</p>
                        <p><strong class="font-medium">Nomor Telepon:</strong> {{ $footerData1->nomor_telepon }}</p>
                        <p><strong class="font-medium">Instagram:</strong> {{ $footerData1->instagram_link }}</p>
                        <p><strong class="font-medium">Gojek:</strong> {{ $footerData1->gojek_link }}</p>

                    </td>

                    <!-- Kolom Kanan untuk Edit ID 2 -->
                    <td class="px-6 py-4 text-sm text-gray-600">
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Link</h4>
                        <p><strong class="font-medium">Alamat Link:</strong> {{ $footerData2->alamat }}</p>
                        <p><strong class="font-medium">Nomor Telepon:</strong> {{ $footerData2->nomor_telepon }}</p>
                        <p><strong class="font-medium">Instagram Link:</strong> {{ $footerData2->instagram_link }}</p>
                        <p><strong class="font-medium">Gojek Link:</strong> {{ $footerData2->gojek_link }}</p>
                    </td>
                </tr>
                <tr>
                    <td class="px-6 py-4 text-sm text-gray-600">
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Gambar</h4>
                        @if($footerData1->image)
                            <img src="{{ asset('storage/' . $footerData1->image) }}" alt="Gambar Footer 1" class="object-contain w-full h-full">
                        @else
                            <p class="text-gray-500">Tidak ada gambar.</p>
                        @endif

                    </td>
                    <td class="px-6 py-4 text-sm text-gray-600">
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">Gambar</h4>
                        @if($footerData2->image)
                                <img src="{{ asset('storage/' . $footerData2->image) }}" alt="Gambar Footer 2" class="object-contain w-full h-full">
                        @else
                            <p class="text-gray-500">Tidak ada gambar.</p>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td class="px-6 py-4 text-sm text-gray-600">
                        <a href="{{ route('footer.edit', $footerData1->id) }}" class="mt-3 inline-block bg-yellow-500 text-white px-4 py-2 rounded-md hover:bg-yellow-600 transition">Edit</a>
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-600">
                        <a href="{{ route('footer.edit', $footerData2->id) }}" class="mt-3 inline-block bg-yellow-500 text-white px-4 py-2 rounded-md hover:bg-yellow-600 transition">Edit</a>
                    </td>

                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
