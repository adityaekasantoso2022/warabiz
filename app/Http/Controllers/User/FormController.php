<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Faq;

class FormController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'kategori_pertanyaan' => 'required',
            'pesan' => 'required',
        ]);

        $user = auth()->user(); // Mendapatkan user yang sedang login

        // Simpan pertanyaan ke database
        $pertanyaan = new Faq();
        $pertanyaan->user_id = $user->id;
        $pertanyaan->email = $user->email;
        $pertanyaan->kategori_pertanyaan = $request->kategori_pertanyaan;
        $pertanyaan->pesan = $request->pesan;
        $pertanyaan->save();

        if (Auth::check()) {
            return view('pages.user.home.submitAnswer', [
            ]);
        }

        return view('pages.user.home.submitAnswer', [
        ]);
    }
}
