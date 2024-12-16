<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Galeri;

class GaleriController extends Controller
{
    // Menampilkan semua galeri
    public function index()
    {
        $galeris = Galeri::all();
        return view('galeri.index', compact('galeris'));
    }

    // Menampilkan form tambah galeri
    public function create()
    {
        return view('galeri.create');
    }

    // Menyimpan galeri baru
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Upload gambar
        $imagePath = $request->file('image')->store('galeri', 'public');

        // Simpan data ke database
        Galeri::create([
            'title' => $request->title,
            'image' => $imagePath,
        ]);

        return redirect()->route('galeri.index')->with('success', 'Galeri berhasil ditambahkan!');
    }

    // Menampilkan form edit galeri
    public function edit($id)
    {
        $galeri = Galeri::findOrFail($id);
        return view('galeri.edit', compact('galeri'));
    }

    // Memperbarui galeri
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $galeri = Galeri::findOrFail($id);

        // Update gambar jika ada
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('galeri', 'public');
            $galeri->image = $imagePath;
        }

        $galeri->title = $request->title;
        $galeri->save();

        return redirect()->route('galeri.index')->with('success', 'Galeri berhasil diperbarui!');
    }

    // Menghapus galeri
    public function destroy($id)
{
    $galeri = Galeri::findOrFail($id);

    // Hapus file gambar dari storage
    if (Storage::exists('public/' . $galeri->image)) {
        Storage::delete('public/' . $galeri->image);
    }

    $galeri->delete();

    return redirect()->route('galeri.index')->with('success', 'Galeri berhasil dihapus!');
}
}
