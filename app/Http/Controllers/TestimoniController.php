<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimoni = Testimoni::all(); // Ambil semua data testimoni

        // Cek apakah user sudah login
        if (!Auth::check()) {
            // Jika belum login, tetap tampilkan halaman testimoni
            return view('testimoni', compact('testimoni'));
        }

        $user = Auth::user(); // Ambil data user yang sedang login

        // Cek role user
        if ($user->role === 'admin') {
            return view('testimoni.index', compact('testimoni'));
        }

        // View untuk user biasa
        return view('testimoni', compact('testimoni')); }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('testimoni.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'=> 'required|string|max:255',
            'isi'=> 'required|string|max:255',
            'gambar'=> 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $testimoni = new Testimoni();
        $testimoni->nama = $request->nama;
        $testimoni->isi = $request->isi;
        $testimoni->user_id = Auth::id(); // Ambil ID user yang login

        if ($request->hasFile('gambar')){
            $testimoni->gambar = $request->file('gambar')->store('images','public');
        };

        $testimoni->save();
        return redirect()->route('testimoni.index')->with('succes', 'Testimoni berhasil ditambahkan!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Testimoni $testimoni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimoni $testimoni)
    {
        return view('testimoni.edit', compact('testimoni'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimoni $testimoni)
    {
        // Pastikan hanya user yang membuat testimoni yang bisa mengeditnya
        if ($testimoni->user_id !== Auth::id()) {
            abort(403, 'Anda tidak diizinkan mengedit testimoni ini.');
        }

        $request->validate([
            'nama'=> 'required|string|max:255',
            'isi'=> 'required|string|max:255',
            'gambar'=> 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $testimoni -> nama= $request->nama;
        $testimoni ->isi= $request->isi;

        if ($request->hasFile('gambar')){
            if($testimoni->gambar){
                Storage::delete('public/'.$testimoni->gambar);
            }
            $testimoni->gambar = $request->file('gambar')->store('images','public');
        };

        $testimoni->save();
        return redirect()->route('testimoni.index')->with('succes', 'Testimoni berhasil diperbarui!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimoni $testimoni)
    {
        // Pastikan hanya user yang membuat testimoni yang bisa menghapusnya
        if ($testimoni->user_id !== Auth::id() && Auth::user()->role !== 'admin') {
            abort(403, 'Anda tidak diizinkan menghapus testimoni ini.');
        }

        if($testimoni->gambar){
            Storage::delete('public/'.$testimoni->gambar);
        }
        $testimoni->delete();
        return redirect()->route('testimoni.index')->with('succes', 'Testimoni berhasil dihapus!');

    }
}
