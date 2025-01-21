@extends('layouts.landingAdmin')

@section('title', 'Landing Page')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4 text-center">Edit About Us</h1>

    <form action="{{ route('aboutus.update', $aboutus->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Title Field -->
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $aboutus->title) }}" required>
        </div>

        <!-- Description Field -->
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" rows="4" required>{{ old('description', $aboutus->description) }}</textarea>
        </div>

        <!-- Date Field -->
        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" name="date" class="form-control" value="{{ old('date', $aboutus->date) }}" required>
        </div>

        <!-- Image Upload Section -->
        <div class="form-group">
            <label for="image">Change Images</label>
            <input type="file" name="image[]" class="form-control" multiple>
            <small class="form-text text-muted">Dapat Menginput Banyak Gambar.</small>
        </div>

        <!-- Display Current Images -->
        @if($aboutus->image)
            @php
                $images = explode(',', $aboutus->image); // Memecah string gambar yang dipisahkan koma
            @endphp

            <div class="form-group">
                <label>Gambar Saat Ini</label>
                <div class="row">
                    @foreach($images as $image)
                        <div class="col-md-3 mb-3">
                            <!-- Card for image display with added background color and shadow -->
                            <div class="card" style="width: 140px; height: 180px; background-color: #f8f8f8; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                <!-- Gambar berada di tengah card menggunakan Flexbox -->
                                <div class="card-img-wrapper d-flex justify-content-center align-items-center" style="height: 120px;">
                                    <img src="{{ asset('storage/' . $image) }}" alt="Image" class="img-fluid rounded" style="max-width: 100px; max-height: 100px; object-fit: cover;">
                                </div>
                                <div class="card-body p-1">
                                    <div class="form-check">
                                        <input type="radio" name="selected_image" value="{{ $image }}" id="image_{{ $loop->index }}" class="form-check-input">
                                        <label class="form-check-label" for="image_{{ $loop->index }}">Edit</label>
                                    </div>
                                    <div class="form-check mt-2">
                                        <input type="checkbox" name="delete_image" value="{{ $image }}" id="delete_{{ $loop->index }}" class="form-check-input">
                                        <label class="form-check-label" for="delete_{{ $loop->index }}">Delete</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary btn-block mb-3">Update</button>
    </form>
</div>

@endsection
