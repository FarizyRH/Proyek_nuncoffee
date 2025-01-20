<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    // Menampilkan daftar produk (Admin dan Non-Admin)
    public function index(Request $request)
    {
        $query = Product::query();

        // Fitur pencarian produk
        if ($request->has('search') && $request->search != '') {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        if ($request->has('search') && $request->category != '') {
            $query->where('category', 'like', '%' . $request->category . '%');
        }

        // Periksa apakah pengguna login dan memiliki role admin
        $user = Auth::user();
        if ($user && $user->role === 'admin') {
            $products = $query->paginate(10);
            return view('product', compact('products'));
        }

        // Untuk pengguna biasa atau tidak login
        $products = $query->paginate(10);
        return view('productuser', compact('products'));
    }

    // Melihat detail produk
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    // Menampilkan form create produk (Admin)
    public function create()
    {
        return view('products.create');
    }

    // Menyimpan produk baru (Admin)
    public function store(Request $request)
    {
        $user = Auth::user();
        if (!$user || $user->role !== 'admin') {
            return redirect()->route('products.index')->with('error', 'Access denied. Admins only.');
        }

        // Validasi input, termasuk gambar
        $request->validate([
            'name' => 'required|string|max:255',
            'gambar' => 'required|image|mimes:jpg,png,jpeg,gif|max:10048',
            'description' => 'required|string',
            'price' => 'required|string',
            'category' => 'required|string',
        ]);

        // Proses upload gambar
        $imagePath = null;
        if ($request->hasFile('gambar')) {
            $imagePath = $request->file('gambar')->store('products', 'public');
            $imagePath = str_replace('public/', '', $imagePath);
        }

        // Simpan produk
        Product::create([
            'name' => $request->name,
            'gambar' => $imagePath,
            'description' => $request->description,
            'price' => $request->price,
            'category' => $request->category,
        ]);

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    // Menampilkan form edit produk (Admin)
    public function edit(Product $product)
    {
        $user = Auth::user();
        if (!$user || $user->role !== 'admin') {
            return redirect()->route('products.index')->with('error', 'Access denied. Admins only.');
        }

        return view('products.edit', compact('product'));
    }

    // Memperbarui data produk (Admin)
    public function update(Request $request, Product $product)
    {
        $user = Auth::user();
        if (!$user || $user->role !== 'admin') {
            return redirect()->route('products.index')->with('error', 'Access denied. Admins only.');
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:10048',
            'description' => 'required|string',
            'price' => 'required|string',
            'category' => 'required|string',
        ]);

        if ($request->hasFile('gambar')) {
            if ($product->gambar) {
                Storage::delete('public/' . $product->gambar);
            }

            $imagePath = $request->file('gambar')->store('products', 'public');
            $imagePath = str_replace('public/', '', $imagePath);
            $product->gambar = $imagePath;
        }

        $product->update($request->except('gambar'));

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    // Menghapus produk (Admin)
    public function destroy(Product $product)
    {
        $user = Auth::user();
        if (!$user || $user->role !== 'admin') {
            return redirect()->route('products.index')->with('error', 'Access denied. Admins only.');
        }

        if ($product->gambar) {
            Storage::delete('public/' . $product->gambar);
        }

        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
