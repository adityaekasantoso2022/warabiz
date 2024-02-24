<?php

namespace App\Http\Controllers\Owner;

use App\Models\WaraCareer;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CloudinaryStorage;
use Illuminate\Http\Request;
use App\Models\JobApplication;


class CareerOwnerController extends Controller
{
    public function index()
    {
        // Mendapatkan user_id yang saat ini masuk
        $user_id = Auth::id();
    
        // Mengambil data karir yang dibuat oleh pengguna dengan user_id tertentu
        $careers = WaraCareer::where('created_by', $user_id)->get();
    
        // Mengambil data aplikasi pekerjaan yang terkait dengan karir yang dibuat oleh pengguna
        $jobApps = JobApplication::whereIn('career_id', $careers->pluck('id'))->get();
    
        return view('pages.owner.career', [
            'careers' => $careers,
            'jobApps' => $jobApps
        ]);
    }
        public function create()
    {
        return view('pages.owner.create.career');
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
                'created_by' => $user->id,
            ]);

            return redirect()->route('owner.career')->with('success', 'Career berhasil dibuat.');
        }

        // Jika tidak ada gambar yang diunggah, kembalikan dengan pesan kesalahan
        return redirect()->route('owner.career')->with('error', 'Mohon unggah gambar untuk setidaknya satu field.');
    }
    public function edit($id)
    {
        $career = WaraCareer::findOrFail($id);
        // Jika karier tidak ditemukan, lempar 404
        if (!$career) {
            abort(404);
        }
        // Kirim data karier ke view untuk diedit
        return view('pages.owner.edit.career', compact('career'));
    }

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

        return redirect()->route('owner.career')->with('success', 'Wara Career berhasil diperbarui.');
    }
    public function destroy($id)
    {
        // Temukan entri karier berdasarkan ID
        $career = WaraCareer::findOrFail($id);

        // Hapus semua aplikasi pekerjaan yang terkait dengan karier yang akan dihapus
        JobApplication::where('career_id', $career->id)->delete();

        // Hapus gambar dari penyimpanan Cloudinary
        CloudinaryStorage::delete($career->image_url);
        CloudinaryStorage::delete($career->logo_url);

        // Hapus entri karier dari database
        $career->delete();

        // Redirect dengan pesan sukses
        return redirect()->route('owner.career')->with('success', 'Pekerjaan berhasil dihapus.');
    }
    public function jobAppDetails($id)
    {
        // Cari Job berdasarkan UUID
        $jobApp = JobApplication::where('application_id', $id)->first();

        // Jika Job tidak ditemukan, bisa ditangani sesuai kebutuhan
        if (!$jobApp) {
            return redirect()->view('pages.owner.error');
        }

        if (Auth::check()) {
            // Tampilkan halaman dengan detail Job
            return view('pages.owner.jobAppdetail', ['jobApp' => $jobApp]);
        }

        // Jika belum login
        return view('pages.user.home');
    }

    public function jobAppUpdate(Request $request, $id)
    {
        // Validasi input dari form
        $request->validate([
            'status' => 'required',
            // Tambahkan validasi untuk kolom-kolom lainnya sesuai kebutuhan
        ]);

        // Cari jobApp berdasarkan ID
        $jobApp = JobApplication::findOrFail($id);

        // Update data jobApp
        $jobApp->update($request->all());

        // Redirect atau berikan respons sesuai kebutuhan
        return redirect()->route('owner.career')->with('success', 'Data jobApp berhasil diperbarui');
    }

    public function jobAppDelete($id)
    {
        $jobApp = JobApplication::findOrFail($id);

        // Menghapus Bukti Pembayaran
        CloudinaryStorage::deletePayment($jobApp->portfolio_url);

        $jobApp->delete();
        return redirect()->route('owner.career')->with('success', 'Job Application berhasil dihapus.');
    }

}