<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri - Nun Coffee</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .container {
            max-width: 800px;
            margin: auto;
        }
        .gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        .gallery img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 5px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        button {
            background-color: #5cb85c;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #4cae4c;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Galeri - Nun Coffee</h1>

        <!-- Form Tambah Foto -->
        <form action="{{ route('galeri.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="image">Tambah Foto:</label>
                <input type="file" name="image" id="image" required>
            </div>
            <button type="submit">Unggah</button>
        </form>

        @if (session('success'))
            <p style="color: green;">{{ session('success') }}</p>
        @endif

        <!-- Galeri Foto -->
        <div class="gallery">
            @foreach ($galeri as $item)
                <div>
                    <img src="{{ asset('storage/' . $item->image) }}" alt="Galeri Foto">
                    <form action="{{ route('galeri.destroy', $item->id) }}" method="POST" style="margin-top: 5px;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
