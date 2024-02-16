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
        ]);

        // Gunakan 'image_url' daripada 'image' pada baris berikut
        $image = $request->file('image_url');

        // Pastikan $image tidak null sebelum melanjutkan
        if ($image) {
            // Unggah gambar ke Cloudinary
            $result = CloudinaryStorage::upload($image->getRealPath(), $image->getClientOriginalName());

            // Buat objek artikel baru berdasarkan data yang diterima
            WaraCareer::create([
                'career_title' => $request->career_title,
                'description' => $request->description,
                'address' => $request->address,
                'image_url' => $result,
                'created_by' => 'admin',
            ]);
            return redirect()->route('admin.career')->with('success', 'Artikel berhasil dibuat.');
        }

        $imageName = time() . '.' . $request->image_url->extension();
        $request->image_url->move(public_path('images'), $imageName);



        return redirect()->route('admin.career')->with('success', 'Karier berhasil ditambahkan');
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
