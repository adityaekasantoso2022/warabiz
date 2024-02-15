<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Articles;
use Illuminate\Http\Request;

class ArtikelAdminController extends Controller
{
    public function index()
    {
        $articles = Articles::all();
        return view('pages.admin.artikel', compact('articles'));
    }

    // Menampilkan formulir untuk membuat artikel baru
    public function create()
    {
        return view('pages.admin.create.artikel');
    }

    // Menyimpan artikel baru ke database
    public function store(Request $request)
    {
        // Validasi data yang diterima dari formulir
        $request->validate([
            'image_url' => 'required',
            'title' => 'required',
            'article' => 'required',
            'category' => 'required',
        ]);

        // Buat objek artikel baru berdasarkan data yang diterima
        Articles::create($request->all());

        return redirect()->route('admin.artikel')->with('success', 'Artikel berhasil dibuat.');
    }

    // Menampilkan formulir untuk mengedit artikel
    public function edit($id)
    {
        $article = Articles::findOrFail($id);
        return view('pages.admin.edit.artikel', compact('article'));
    }

    // Memperbarui artikel dalam database
    public function update(Request $request, $id)
    {
        // Validasi data yang diterima dari formulir
        $request->validate([
            'image_url' => 'required',
            'title' => 'required',
            'article' => 'required',
            'category' => 'required',
        ]);

        // Cari artikel berdasarkan ID
        $article = Articles::findOrFail($id);
        
        // Update artikel dengan data baru
        $article->update($request->all());

        return redirect()->route('admin.artikel')->with('success', 'Artikel berhasil diperbarui.');
    }
    public function destroy($id)
    {
        $article = Articles::findOrFail($id);
        $article->delete();
        return redirect()->route('admin.artikel')->with('success', 'Artikel berhasil dihapus.');
    }

}
