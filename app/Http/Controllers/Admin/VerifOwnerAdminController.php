<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\CloudinaryStorage;
use App\Http\Controllers\Controller;
use App\Models\VerifiedOwner;
use Illuminate\Http\Request;
use App\Models\User;


class VerifOwnerAdminController extends Controller
{
    public function index()
    {
        $verifOwners = VerifiedOwner::all();
        return view('pages.admin.verifOwner', compact('verifOwners'));
    }


    // Menampilkan formulir untuk mengedit verifOwner
    public function edit($id)
    {
        $verifOwner = VerifiedOwner::findOrFail($id);
        return view('pages.admin.edit.verifOwner', compact('verifOwner'));
    }

    // Memperbarui verifOwner dalam database
    public function update(Request $request, $id)
{
    // Validasi input dari form
    $request->validate([
        'status' => 'required',
    ]);

    // Cari verifikasi owner berdasarkan ID
    $verifOwner = VerifiedOwner::findOrFail($id);

    // Update data verifikasi owner
    $verifOwner->update([
        'status' => $request->input('status'),
        'updated_by' => 'admin',
    ]);

    // Jika status berubah menjadi diterima (3), ubah peran pengguna menjadi owner
    if ($request->input('status') == '3') {
        // Temukan pengguna berdasarkan ID
        $user = User::findOrFail($verifOwner->user_id);

        // Perbarui peran pengguna menjadi owner
        $user->role = 'owner';
        $user->save();
    } elseif ($request->input('status') != '3') {
        // Jika status bukan '3', kembalikan peran pengguna menjadi user
        $user = User::findOrFail($verifOwner->user_id);
        $user->role = 'user'; // Atur sesuai kebutuhan, misalnya 'user' atau peran lainnya
        $user->save();
    }

    // Redirect atau berikan respons sesuai kebutuhan
    return redirect()->route('admin.verifowner')->with('success', 'Data verifikasi owner berhasil diperbarui');
}

    public function show($id)
    {
        // Cari verifikasi owner berdasarkan UUID
        $verifOwner = VerifiedOwner::where('id', $id)->first();

        // Jika verifikasi owner tidak ditemukan, bisa ditangani sesuai kebutuhan
        if (!$verifOwner) {
            return redirect()->view('pages.admin.error');
        }

        // Tampilkan halaman dengan detail verifikasi owner
        return view('pages.admin.verifOwnerdetail', ['verifOwner' => $verifOwner]);
    }

    public function destroy($id)
    {
        $verifOwner = VerifiedOwner::findOrFail($id);

        CloudinaryStorage::delete($verifOwner->company_pict);
        CloudinaryStorage::delete($verifOwner->ktp_upload);

        $verifOwner->delete();
        return redirect()->route('admin.verifowner')->with('success', 'Pengajuan berhasil dihapus.');
    }

}
