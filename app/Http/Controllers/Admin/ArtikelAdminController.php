<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\CloudinaryStorage;
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
            'image_url' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required',
            'article' => 'required',
            'category' => 'required',
        ]);
    
        // Gunakan 'image_url' daripada 'image' pada baris berikut
        $image  = $request->file('image_url');
    
        // Pastikan $image tidak null sebelum melanjutkan
        if ($image) {
            // Unggah gambar ke Cloudinary
            $result = CloudinaryStorage::upload($image->getRealPath(), $image->getClientOriginalName());
    
            // Buat objek artikel baru berdasarkan data yang diterima
            Articles::create([
                'image_url' => $result,
                'title' => $request->input('title'),
                'article' => $request->input('article'), // Ambil konten dari text editor
                'category' => $request->input('category'),
                'created_by' => auth()->id() // Atur pembuat artikel, sesuaikan sesuai kebutuhan Anda
            ]);
            return redirect()->route('admin.artikel')->with('success', 'Artikel berhasil dibuat.');
        }
    
        // Tangani kasus di mana $image null (tidak ada file yang diunggah)
        return view('pages.admin.create.artikel')->with('error', 'Gambar tidak valid.');
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
        // Validasi input
        $request->validate([
            'title' => 'required',
            'image_url' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'article' => 'required',
            'category'=> 'required',
        ]);

        // Cari waralaba berdasarkan ID
        $article = Articles::findOrFail($id);

        // Gunakan 'image_url' daripada 'image' pada baris berikut
        $image = $request->file('image_url');

        // Periksa apakah file baru dipilih, jika tidak, gunakan file yang sudah ada
        $imagePath = $image ? CloudinaryStorage::replace($article->image_url, $image->getRealPath(), $image->getClientOriginalName()) : $article->image_url;

        // Update data article berdasarkan data yang diterima
        $article->update([
            'title' => $request->input('title'),
            'image_url' => $imagePath,
            'article' => $request->input('article'),
            'category' =>  $request->input('category')
        ]);

        return redirect()->route('admin.artikel')->with('success', 'Article berhasil diupdate.');
    }

    public function destroy($id)
    {
        $article = Articles::findOrFail($id);

        // Hapus gambar dari Cloudinary
        CloudinaryStorage::delete($article->image_url);

        $article->delete();
        return redirect()->route('admin.artikel')->with('success', 'Artikel berhasil dihapus.');
    }

}
