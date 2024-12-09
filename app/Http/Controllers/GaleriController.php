<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;

class GaleriController extends Controller
{
    // Menampilkan galeri
    public function index()
    {
        $galeri = Galeri::all(); // Ambil semua data galeri
        return view('galeri.layout', compact('galeri'));
    }

    // Tambah foto ke galeri
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $path = $request->file('image')->store('galeri', 'public');

        Galeri::create([
            'image' => $path,
        ]);

        return redirect()->back()->with('success', 'Foto berhasil ditambahkan!');
    }

    // Hapus foto dari galeri
    public function destroy($id)
    {
        $galeri = Galeri::findOrFail($id);
        unlink(storage_path('app/public/' . $galeri->image)); // Hapus file fisik
        $galeri->delete();

        return redirect()->back()->with('success', 'Foto berhasil dihapus!');
    }
}
