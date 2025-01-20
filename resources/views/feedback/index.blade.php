@extends('layouts.landingAdmin')

@section('title','Landing Page')

@section('content')
    <div class="max-w-6xl mx-auto p-4">
        <!-- Tombol Tambah Feedback -->
        <h1 class="text-2xl font-bold text-gray-800 mb-4">Setting Feedback</h1>
        <h1 class="mb-4 text-center">Daftar Feedback</h1>

        <!-- Pesan Sukses -->
        @if(session('success'))
            <div class="alert alert-success mb-4 bg-green-500 text-white p-4 rounded-md">{{ session('success') }}</div>
        @endif

        <!-- Feedback Tabel -->
        <div class="overflow-hidden bg-white shadow-md rounded-lg">
            <table class="table table-striped table-bordered w-full">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="p-2 text-left">No</th>
                        <th class="p-2 text-left">Nama</th>
                        <th class="p-2 text-left">Email</th>
                        <th class="p-2 text-left">Tanggal Pembuatan</th>
                        <th class="p-2 text-left">Feedback</th>
                        <th class="p-2 text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($feedbacks as $index => $feedback)
                    <tr class="border-t border-b hover:bg-gray-50">
                        <td class="p-2">{{ $index + 1 }}</td>
                        <td class="p-2">{{ $feedback->nama }}</td>
                        <td class="p-2">{{ $feedback->email }}</td>
                        <td class="p-2">{{ $feedback->created_at->format('F j, Y, g:i a') }}</td>
                        <td class="p-2">{{ $feedback->pesan }}</td>
                        <td class="p-2">
                            <form action="{{ route('feedback.destroy', $feedback->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus feedback ini?');">
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
