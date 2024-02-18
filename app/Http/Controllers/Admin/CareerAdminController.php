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

        CloudinaryStorage::delete($career->image_url);
        CloudinaryStorage::delete($career->logo_url);

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
        // Validasi data yang diterima dari formulir
        $request->validate([
            'career_title' => 'required',
            'description' => 'required',
            'address' => 'required',
            'image_url' => 'required',
            'logo_url' => 'required',
            'created_by' => 'admin',
        ]);

        // Cari artikel berdasarkan ID
        $career = WaraCareer::findOrFail($id);

        // Update artikel dengan data baru
        $career->update($request->all());

        return redirect()->route('admin.career')->with('success', 'career berhasil diperbarui.');
    }

}
