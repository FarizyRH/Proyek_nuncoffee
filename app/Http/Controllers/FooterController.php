<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Footer;
use Illuminate\Support\Facades\Auth;

class FooterController extends Controller
{
    // Menampilkan data hanya untuk index 1 dan 2
    public function index()
    {
        // Mengambil hanya data dengan id 1 dan 2
        $footerData = Footer::all()->keyBy('id');

        return view('footer.index', compact('footerData'));
    }
    public function indexAdmin()
    {
        $user = Auth::user();
        if (!$user|| $user->role !== 'admin') {
            return redirect('/')->with('error', 'Anda tidak memiliki akses ke halaman ini.');
        }

        // Ambil data footer berdasarkan ID 1 dan ID 2
        $footerData1 = Footer::find(1);
        $footerData2 = Footer::find(2);

        // Kirim data ke view untuk ditampilkan
        return view('footer.index', compact('footerData1', 'footerData2'));

    }
    // Menampilkan form untuk mengedit data footer (index 1 dan 2)
    public function edit($id)
{
    // Mengambil data footer berdasarkan ID
    $footerData = Footer::find($id);

    // Jika data tidak ditemukan, redirect atau tampilkan pesan error
    if (!$footerData) {
        return redirect()->route('footer.index')->with('error', 'Footer not found.');
    }

    // Kirim data ke view
    return view('footer.edit', compact('footerData'));
}

    // Update data footer
    public function updateFooter(Request $request, $id)
{
    // Validasi input
    $request->validate([
        'alamat' => 'required|string|max:255',
        'nomor_telepon' => 'required|string|max:20',
        'instagram_link' => 'required|url',
        'gojek_link' => 'required|url',
    ]);

    // Cari data footer berdasarkan ID
    $footer = Footer::find($id);

    // Pastikan data ditemukan
    if (!$footer) {
        return redirect()->route('footer.index')->with('error', 'Data footer tidak ditemukan');
    }

    // Periksa mana yang harus diperbarui berdasarkan data yang dikirimkan
    if ($request->has('alamat')) {
        $footer->alamat = $request->input('alamat');
    }

    if ($request->has('nomor_telepon')) {
        $footer->nomor_telepon = $request->input('nomor_telepon');
    }

    if ($request->has('instagram_link')) {
        $footer->instagram_link = $request->input('instagram_link');
    }

    if ($request->has('gojek_link')) {
        $footer->gojek_link = $request->input('gojek_link');
    }

    // Simpan perubahan
    $footer->save();

    // Redirect kembali dengan pesan sukses
    return redirect()->route('footer.index')->with('success', 'Data footer berhasil diperbarui');
}
}
