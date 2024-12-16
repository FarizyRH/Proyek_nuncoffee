<x-app-layout>
    <div class="container py-5">
        <a href="{{ route('galeri.create') }}" class="btn btn-primary mb-4">Tambah Galeri</a>
        @if(session('success'))
            <div class="alert alert-success mb-4">{{ session('success') }}</div>
        @endif
        <div class="row g-4">
            @foreach($galeris as $galeri)
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('storage/' . $galeri->image) }}" class="card-img-top" alt="{{ $galeri->title }}" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $galeri->title }}</h5>
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('galeri.edit', $galeri->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('galeri.destroy', $galeri->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
