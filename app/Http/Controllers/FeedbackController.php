<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $feedbacks = Feedback::with('user')->get();  // Mengambil feedback dengan user terkait
        return view('feedback', compact('feedbacks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('feedback.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
{
    // Validasi input
    $validated = $request->validate([
        'nama' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'pesan' => 'required|string',
    ]);

    // Simpan feedback menggunakan relasi feedback milik user
    $request->user()->feedback()->create([
        'nama' => $validated['nama'],
        'email' => $validated['email'],
        'pesan' => $validated['pesan'],
    ]);

    // Redirect dengan pesan sukses
    return redirect()->route('feedback.index')->with('success', 'Feedback berhasil dikirim!');
}


    /**
     * Display the specified resource.
     */
    public function show(Feedback $feedback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Feedback $feedback)
    {
       // Periksa apakah user yang sedang login adalah pemilik feedback
        if (!auth()->check() || auth()->user()->id !== $feedback->user_id) {
            // Jika bukan pemilik feedback, redirect ke halaman daftar dengan pesan error
            return redirect()->route('feedback.index')->with('error', 'Anda tidak memiliki akses untuk mengedit feedback ini.');
        }

        // Jika pemilik feedback, tampilkan form edit
        return view('feedback.edit', compact('feedback'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Feedback $feedback)
    {
       // Periksa apakah user adalah pemilik feedback atau admin
        if (!auth()->check() || (auth()->user()->id !== $feedback->user_id && !auth()->user()->is_admin)) {
            // Jika bukan pemilik feedback dan bukan admin, redirect ke halaman daftar dengan pesan error
            return redirect()->route('feedback.index')->with('error', 'Anda tidak memiliki akses untuk memperbarui feedback ini.');
        }

        // Validasi data
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'pesan' => 'required|string',
        ]);

        // Update feedback
        $feedback->update($validated);

        return redirect()->route('feedback.index')->with('success', 'Feedback berhasil diperbarui!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Feedback $feedback)
    {
         // Periksa apakah user yang sedang login adalah admin atau pemilik feedback
        if (auth()->user()->isAdmin()) {
            // Admin hanya dapat menghapus feedback
            $feedback->delete();
            return redirect()->route('feedback.index')->with('success', 'Feedback berhasil dihapus.');
        } elseif (auth()->user()->id === $feedback->user_id) {
            // Jika pemilik feedback, hapus feedback
            $feedback->delete();
            return redirect()->route('feedback.index')->with('success', 'Feedback berhasil dihapus.');
        } else {
            // Jika bukan admin atau pemilik feedback, redirect dengan pesan error
            return redirect()->route('feedback.index')->with('error', 'Anda tidak memiliki akses untuk menghapus feedback ini.');
        }
    }

}
