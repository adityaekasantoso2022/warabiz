<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\BalasanPesan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail; // Tambahkan ini untuk menggunakan fasilitas email Laravel
use App\Models\Faq;

class BantuanAdminController extends Controller
{
    // Mengambil data FAQ bersama dengan data user yang terkait
    public function index()
    {
        if (Auth::check()) {
            // Menggunakan with('user') untuk memuat data user terkait
            $faqs = Faq::with('user')->get();

            return view('pages.admin.bantuan', [
                'faqs' => $faqs
            ]);
        }

        return view('pages.admin.bantuan');
    }
    
    public function balas($id)
    {
        $pesan = Faq::findOrFail($id);
        return view('pages.admin.balas', compact('pesan'));
    }

    public function hapusPesan($id)
    {
        // Cari pesan berdasarkan ID
        $pesan = Faq::findOrFail($id);
        
        // Hapus pesan
        $pesan->delete();
        
        // Respon berhasil
        return response()->json(['message' => 'Pesan berhasil dihapus'], 200);
    }
}
