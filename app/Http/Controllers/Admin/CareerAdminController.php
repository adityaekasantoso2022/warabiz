<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\CloudinaryStorage;
use Illuminate\Support\Facades\Auth;
use App\Models\WaraCareer;
use Illuminate\Http\Request;



class CareerAdminController extends Controller
{
    //Mengambil data pekerjaan
    public function index()
    {
        if (Auth::check()) {
            $careers = WaraCareer::all();

            return view('pages.admin.career', [
                'careers' => $careers
            ]);
        }

        return view('pages.admin.career');
    }

    //Hapus pekerjaan
    public function destroy($id)
    {
        $career = WaraCareer::findOrFail($id);
        $career->delete();
        return redirect()->route('admin.career')->with('success', 'Pekerjaan berhasil dihapus.');
    }

    public function create()
    {
        return view('pages.admin.create.career');
    }

    public function store(Request $request)
    {
        $request->validate([
            'career_title' => 'required|string',
            'description' => 'required|string',
            'address' => 'required|string',
            'image_url' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'logo_url' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi untuk logo_url
        ]);
    
        // Pengunggahan gambar image_url
        $image = $request->file('image_url');
        $imageResult = null;
        if ($image) {
            $imageResult = CloudinaryStorage::upload($image->getRealPath(), $image->getClientOriginalName());
        }
    
        // Pengunggahan gambar logo_url
        $logo = $request->file('logo_url');
        $logoResult = null;
        if ($logo) {
            $logoResult = CloudinaryStorage::upload($logo->getRealPath(), $logo->getClientOriginalName());
        }
    
        // Pastikan setidaknya satu gambar diunggah sebelum melanjutkan
        if ($imageResult || $logoResult) {
            // Buat objek artikel baru berdasarkan data yang diterima
            WaraCareer::create([
                'career_title' => $request->career_title,
                'description' => $request->description,
                'address' => $request->address,
                'image_url' => $imageResult,
                'logo_url' => $logoResult,
                'created_by' => 'admin',
            ]);
            
            return redirect()->route('admin.career')->with('success', 'Artikel berhasil dibuat.');
        }
    
        // Jika tidak ada gambar yang diunggah, kembalikan dengan pesan kesalahan
        return redirect()->route('admin.career')->with('error', 'Mohon unggah gambar untuk setidaknya satu field.');
    }
        public function edit($id)
    {
        $career = WaraCareer::findOrFail($id);
        // Jika karier tidak ditemukan, lempar 404
        if (!$career) {
            abort(404);
        }
        // Kirim data karier ke view untuk diedit
        return view('pages.admin.edit.career', compact('career'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data masukan dari formulir
        $validatedData = $request->validate([
            'career_title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Cari karier berdasarkan ID
        $career = WaraCareer::findOrFail($id); // Gunakan model Career

        // Update data karier dengan data yang diberikan dari formulir
        $career->update($validatedData);

        // Redirect ke halaman karier setelah berhasil mengupdate
        return redirect()->route('admin.career')->with('success', 'Karier berhasil diperbarui.'); // Perbaiki nama rute
    }

}
