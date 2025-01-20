<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutusController extends Controller
{
    // Menampilkan About Us pertama
    public function index()
    {
        $aboutus = AboutUs::first();
        return view('aboutus.index', compact('aboutus'));
    }

    // Menampilkan form edit hanya untuk admin
    public function edit($id)
    {
        if (auth()->user()->role !== 'admin') {
            return redirect()->route('aboutus.index')->with('error', 'Access denied. Admins only.');
        }

        $aboutus = AboutUs::findOrFail($id);
        return view('aboutus.edit', compact('aboutus'));
    }

    // Memperbarui data About Us
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date', // Validasi untuk tanggal
            'image' => 'nullable|array',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'selected_image' => 'nullable|string',
        ]);

        // Ambil data AboutUs yang sudah ada
        $aboutus = AboutUs::findOrFail($id);
        $aboutus->title = $request->title;
        $aboutus->description = $request->description;
        $aboutus->date = $request->date; // Simpan nilai tanggal dari request

        // Proses gambar
        $images = $aboutus->image ? explode(',', $aboutus->image) : [];

        // Proses gambar baru
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $image) {
                $path = $image->store('aboutus', 'public');
                $images[] = $path;
            }
        }

        // Ganti gambar tertentu jika ada
        if ($request->has('selected_image')) {
            $selectedImageIndex = array_search($request->selected_image, $images);
            if ($selectedImageIndex !== false) {
                if ($request->hasFile('image')) {
                    $newImage = $request->file('image')[0];
                    $path = $newImage->store('aboutus', 'public');
                    $images[$selectedImageIndex] = $path;
                }
            }
        }

        // Hapus gambar tertentu jika ada
        if ($request->has('delete_image')) {
            $images = array_filter($images, function ($image) use ($request) {
                return $image !== $request->delete_image;
            });

            // Hapus file gambar dari storage
            Storage::disk('public')->delete($request->delete_image);
        }

        // Gabungkan semua gambar (lama dan baru) ke dalam string yang dipisahkan koma
        $aboutus->image = implode(',', $images);

        // Simpan perubahan
        $aboutus->save();

        return redirect()->route('aboutus.index')->with('success', 'About Us updated successfully');
    }
}
   


