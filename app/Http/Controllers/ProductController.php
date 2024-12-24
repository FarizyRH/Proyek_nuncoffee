<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
    
    // Untuk Admin, tampilkan semua produk dengan kontrol penuh
    if (auth()->user()->role === 'admin') {
        $products = $query->paginate(10);
        return view('product', compact('products'));
    }

    // Untuk User, tampilkan produk hanya untuk melihat dan mencari
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
        if (auth()->user()->role !== 'admin') {
            return redirect()->route('products.index')->with('error', 'Access denied. Admins only.');
        }

        return view('products.create');
    }

    // Menyimpan produk baru (Admin)
    public function store(Request $request)
    {
        if (auth()->user()->role !== 'admin') {
            return redirect()->route('products.index')->with('error', 'Access denied. Admins only.');
        }

        // Validasi input, termasuk gambar
        $request->validate([
            'name' => 'required|string|max:255',
            'gambar' => 'required|image|mimes:jpg,png,jpeg,gif|max:10048', // Validasi gambar
            'description' => 'required|string',
            'price' => 'required|string',
            'category' => 'required|string',
        ]);

        // Proses upload gambar
        $imagePath = null;
        if ($request->hasFile('gambar')) {
            // Menyimpan gambar ke folder public/products di storage
            $imagePath = $request->file('gambar')->store('products', 'public');

            // Menghilangkan prefix 'public/' untuk disimpan di database
            $imagePath = str_replace('public/', '', $imagePath);
        }

        // Menyimpan produk dengan gambar
        Product::create([
            'name' => $request->name,
            'gambar' => $imagePath, // Simpan path gambar di database
            'description' => $request->description,
            'price' => $request->price,
            'category' => $request->category,
        ]);

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    // Menampilkan form edit produk (Admin)
    public function edit(Product $product)
    {
        if (auth()->user()->role !== 'admin') {
            return redirect()->route('products.index')->with('error', 'Access denied. Admins only.');
        }

        return view('products.edit', compact('product'));
    }

    // Memperbarui data produk (Admin)
    public function update(Request $request, Product $product)
    {
        if (auth()->user()->role !== 'admin') {
            return redirect()->route('products.index')->with('error', 'Access denied. Admins only.');
        }

        // Validasi input, termasuk gambar
        $request->validate([
            'name' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:10048', // Validasi gambar (opsional saat update)
            'description' => 'required|string',
            'price' => 'required|string',
            'category' => 'required|string',
        ]);

        // Proses upload gambar jika ada file yang diunggah
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($product->gambar) {
                Storage::delete('public/' . $product->gambar);
            }

            // Menyimpan gambar baru
            $imagePath = $request->file('gambar')->store('products', 'public');

            $imagePath = str_replace('public/', '', $imagePath);
            $product->gambar = $imagePath; // Update path gambar
        }

        // Memperbarui produk
        $product->update($request->except('gambar')); // Update selain gambar

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    // Menghapus produk (Admin)
    public function destroy(Product $product)
    {
        if (auth()->user()->role !== 'admin') {
            return redirect()->route('products.index')->with('error', 'Access denied. Admins only.');
        }

        // Hapus gambar produk jika ada
        if ($product->gambar) {
            Storage::delete('public/' . $product->gambar);
        }

        // Menghapus produk
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}



