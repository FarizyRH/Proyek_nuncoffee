<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimoni = Testimoni::all();
        return view ('testimoni.index', compact('testimoni'));
    }

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
            'nama'=>'required|string|max:255',
            'isi_testimoni'=>'required|string|max:255',
            'gambar'=>'nullable|image|mimes:jpg,jpeg,png|max:2048',
       ]);

       $testimoni=new Testimoni();
       $testimoni->nama = $request->nama;
       $testimoni->isi_testimoni = $request->isi_testimoni;

       if ($request->hasFile('gambar')){
            $testimoni->gambar = $request->file('gambar')->store('images', 'public');
       }

       $testimoni->save();
       return redirect()-> route('testimoni.index')->with('success',
        'Testimoni berhasil ditambahkan!');
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
        return view('testimoni.edit',compact('testimoni'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimoni $testimoni)
    {
        $request->validate([
            'nama'=>'required|string|max:255',
            'isi_testimoni'=>'required|string|max:255',
            'gambar'=>'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $testimoni->nama = $request->nama;
        $testimoni->isi_testimoni = $request->isi_testimoni;

        // Periksa jika ada file gambar baru
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($testimoni->gambar) {
                Storage::delete('public/' . $testimoni->gambar);
            }
            // Simpan gambar baru
            $testimoni->gambar = $request->file('gambar')->store('images', 'public');
        }

        $testimoni->save();
        return redirect()->route('testimoni.index')->with('success', 'Testimoni berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimoni $testimoni)
    {
        if ($testimoni->gambar){
            Storage::delete ('public/'.$testimoni->gambar);
        }
        $testimoni->delete();
        return redirect()-> route('testimoni.index')->with('success',
        'Testimoni berhasil dihapus!');
    }
}
