<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QnA;

class QnAController extends Controller
{
    // Menampilkan daftar QnA
    public function index()
    {
        $qna = QnA::all();
        return view('qna.index', compact('qna'));
    }

    // Tambah QnA baru
    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required|string',
            'answer' => 'required|string',
        ]);

        QnA::create($request->all());

        return redirect()->back()->with('success', 'QnA berhasil ditambahkan!');
    }

    // Hapus QnA
    public function destroy($id)
    {
        $qna = QnA::findOrFail($id);
        $qna->delete();

        return redirect()->back()->with('success', 'QnA berhasil dihapus!');
    }
}
