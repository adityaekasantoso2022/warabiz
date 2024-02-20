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
            'company_name' => 'required|string',
            'image_url' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'logo_url' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'profile_company' => 'required',
            'work_requirements' => 'required',
        ]);

        // Pengunggahan gambar image_url
        $image = $request->file('image_url');
        $logo = $request->file('logo_url');

        $user = auth()->user(); // Mendapatkan user yang sedang login

        // Pastikan setidaknya satu gambar diunggah sebelum melanjutkan
        if ($image || $logo) {

            $logoResult = CloudinaryStorage::upload($logo->getRealPath(), $logo->getClientOriginalName());
            $imageResult = CloudinaryStorage::upload($image->getRealPath(), $image->getClientOriginalName());
            // Buat objek artikel baru berdasarkan data yang diterima
            WaraCareer::create([
                'career_title' => $request->input('career_title'),
                'description' => $request->input('description'),
                'company_name' => $request->input('company_name'),
                'image_url' => $imageResult,
                'logo_url' => $logoResult,
                'profile_company' => $request->input('profile_company'),
                'work_requirements' => $request->input('work_requirements'),
                'min_salary' => $request->input('min_salary'),
                'max_salary' => $request->input('max_salary'),
                'created_by' => $user->role,
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
    // public function update(Request $request, $id)
    // {
    //     $user = auth()->user(); // Mendapatkan user yang sedang login

    //     // Validasi data yang diterima dari formulir
    //     $request->validate([
    //         'career_title' => 'required',
    //         'description' => 'required',
    //         'company_name' => 'required',
    //         'image_url' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    //         'logo_url' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    //         'profile_company' => 'required',
    //         'work_requirements' => 'required',
    //         'updated_by' => $user->role,
    //     ]);

    //     // Cari artikel berdasarkan ID
    //     $career = WaraCareer::findOrFail($id);

    //     // Update artikel dengan data baru
    //     $career->update($request->all());

    //     return redirect()->route('admin.career')->with('success', 'career berhasil diperbarui.');
    // }
    public function update(Request $request, $id)
    {
        $request->validate([
            'career_title' => 'required|string',
            'description' => 'required|string',
            'company_name' => 'required|string',
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'logo_url' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'profile_company' => 'required',
            'work_requirements' => 'required',
        ]);

        $career = WaraCareer::findOrFail($id);

        // Pengunggahan gambar image_url jika diunggah
        if ($request->hasFile('image_url')) {
            $image = $request->file('image_url');
            $imageResult = $image ? CloudinaryStorage::replace($career->image_url, $image->getRealPath(), $image->getClientOriginalName()) : $career->image_url;
            $career->image_url = $imageResult;
        }

        // Pengunggahan gambar logo_url jika diunggah
        if ($request->hasFile('logo_url')) {
            $logo = $request->file('logo_url');
            $logoResult = $logo ? CloudinaryStorage::replace($career->logo_url, $logo->getRealPath(), $logo->getClientOriginalName()) : $career->logo_url;
            $career->logo_url = $logoResult;
        }

        // Pembaruan atribut karier
        $career->update([
            'career_title' => $request->input('career_title'),
            'description' => $request->input('description'),
            'company_name' => $request->input('company_name'),
            'profile_company' => $request->input('profile_company'),
            'work_requirements' => $request->input('work_requirements'),
            'min_salary' => $request->input('min_salary'),
            'max_salary' => $request->input('max_salary'),
        ]);

        return redirect()->route('admin.career')->with('success', 'Wara Career berhasil diperbarui.');
    }

}
