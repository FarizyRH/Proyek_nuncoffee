<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FAQ;

class FAQController extends Controller
{
    // Menampilkan FAQ
    public function index()
    {
        $faq = FAQ::all();
        return view('faq.index', compact('faq'));
    }

    // Tambah FAQ
    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required|string',
            'answer' => 'required|string',
        ]);

        FAQ::create($request->all());

        return redirect()->back()->with('success', 'FAQ berhasil ditambahkan!');
    }

    // Hapus FAQ
    public function destroy($id)
    {
        $faq = FAQ::findOrFail($id);
        $faq->delete();

        return redirect()->back()->with('success', 'FAQ berhasil dihapus!');
    }
}
