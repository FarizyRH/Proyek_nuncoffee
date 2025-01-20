@extends('layouts.landingAdmin')

@section('title','Landing Page')

@section('content')
    <div class="max-w-6xl mx-auto p-4">
        <h1 class="text-2xl font-bold text-gray-800 mb-4">Setting Testimoni</h1>
        <h1 class="mb-4 text-center">Daftar Testimoni</h1>


        <!-- Display success message if available -->
        @if(session('success'))
            <div class="alert alert-success mb-4 bg-green-500 text-white p-4 rounded-md">{{ session('success') }}</div>
        @endif

        <!-- Testimonials Table -->
        <div class="overflow-hidden bg-white shadow-md rounded-lg">
            <table class="table table-striped table-bordered w-full">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="p-2 text-left">No</th>
                        <th class="p-2 text-left">Gambar</th>
                        <th class="p-2 text-left">Nama</th>
                        <th class="p-2 text-left">Pengguna</th>
                        <th class="p-2 text-left">Isi Testimoni</th>
                        <th class="p-2 text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($testimoni as $index => $testi)
                    <tr class="border-t border-b hover:bg-gray-50">
                        <td class="p-2">{{ $index + 1 }}</td>
                        <td class="p-2">
                            @if($testi->gambar)
                                <img src="{{ Storage::url($testi->gambar) }}" class="max-h-24 object-cover" alt="Gambar Testimoni">
                            @else
                                <span>Tidak ada gambar</span>
                            @endif
                        </td>
                        <td class="p-2">{{ $testi->nama }}</td>
                        <td class="p-2">{{ $testi->user?->name ?? 'Tidak diketahui' }}</td>
                        <td class="p-2">{{ htmlspecialchars($testi->isi) }}</td>
                        <td class="p-2">
                            <form action="{{ route('testimoni.destroy', $testi->id) }}" method="POST" class="inline ml-2" onsubmit="return confirm('Apakah Anda yakin ingin menghapus testimoni ini?');">
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
