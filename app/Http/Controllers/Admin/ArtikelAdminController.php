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
                'article' => $request->input('article'),
                'category' => $request->input('category'),
                'created_by'
            ]);
            return redirect()->route('admin.artikel')->with('success', 'Artikel berhasil dibuat.');
        }

        // Tangani kasus di mana $image null (tidak ada file yang diunggah)
        return view('pages.admin.create.artikel', compact('articles'))->with('error', 'Gambar tidak valid.');
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
        // Validasi data yang diterima dari formulir edit
        $request->validate([
            'image_url' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // boleh kosong jika tidak ingin mengganti gambar
            'title' => 'required',
            'article' => 'required',
            'category' => 'required',
        ]);

        // Ambil artikel berdasarkan ID
        $article = Articles::findOrFail($id);

        // Update data artikel sesuai dengan input dari formulir edit
        $articleData = [
            'title' => $request->input('title'),
            'article' => $request->input('article'),
            'category' => $request->input('category'),
        ];

        // Periksa apakah ada file gambar yang diunggah untuk pembaruan
        if ($request->hasFile('image_url')) {
            // Jika ada, unggah gambar baru ke Cloudinary
            $newImage = $request->file('image_url');
            $result = CloudinaryStorage::upload($newImage->getRealPath(), $newImage->getClientOriginalName());

            // Hapus gambar lama dari Cloudinary
            CloudinaryStorage::delete($article->image_url);

            // Simpan URL gambar yang baru diupdate
            $articleData['image_url'] = $result;
        }

        // Update data artikel
        $article->update($articleData);

        // Redirect ke halaman artikel dengan pesan sukses
        return redirect()->route('admin.artikel')->with('success', 'Artikel berhasil diupdate.');
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
