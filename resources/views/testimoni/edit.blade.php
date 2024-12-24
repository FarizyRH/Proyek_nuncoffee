@extends('layouts.landing')

@section('title','Landing Page')

@section('content')
    <div class="max-w-4xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Edit Testimoni</h1>
        <form action="{{ route('testimoni.update', $testimoni->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="block text-sm font-medium">Nama</label>
                <input type="text" name="nama" value="{{ $testimoni->nama }}" class="mt-1 block w-full border-gray-300 rounded-md" required />
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium">Isi Testimoni</label>
                <textarea name="isi_testimoni" id="editor" rows="5" class="mt-1 block w-full border-gray-300 rounded-md" required>{{ $testimoni->isi_testimoni }}</textarea>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium">Gambar</label>
                <input type="file" name="gambar" class="mt-1 block w-full" accept="image/*" />
                @if ($testimoni->gambar)
                    <img src="{{ Storage::url($testimoni->gambar) }}" class="h-48 mt-2" alt="Gambar Testimoni" />
                @endif
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
        </form>
    </div>

    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
