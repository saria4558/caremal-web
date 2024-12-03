<?php

namespace App\Http\Controllers;

use App\Models\ArtikelPublic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArtikelController extends Controller
{
    // Menampilkan semua artikel
    public function daftarArtikel()
    {
        $articles = ArtikelPublic::all(); // Ambil semua artikel
        return view('admin.daftarartikel', compact('articles')); // Kirim artikel ke view
    }

    // Menampilkan form untuk menambah artikel
    public function tambah()
    {
        return view('admin.artikel');
    }

    public function insertArtikel(Request $request)
{
    // Validasi input
    $validatedData = $request->validate([
        'artikel_judul' => 'required|string|max:255',
        'artikel_deskripsi' => 'required|string',
        'artikel_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
    ]);

    // Menyimpan gambar jika ada
    if ($request->hasFile('artikel_image')) {
        $validatedData['artikel_image'] = $request->file('artikel_image')->store('img', 'public');
    }

    // Menyimpan artikel ke database dengan status default
    ArtikelPublic::create(array_merge($validatedData, ['artikel_status' => 'waiting']));

    // Mengarahkan kembali ke daftar artikel dengan pesan sukses
    return redirect()->route('daftarArtikel')->with('success', 'Artikel berhasil ditambahkan!');
}
}