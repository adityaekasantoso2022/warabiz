<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\CloudinaryStorage;
use App\Http\Controllers\Controller;
use App\Models\JobApplication;
use App\Models\WaraCareer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WaracareerController extends Controller
{
    public function show($id)
    {
        $career = WaraCareer::find($id);
        return view('pages.user.waracareerdetail', compact('career'));
    }
    public function index()
    {
        if (Auth::check()) {
            return view('pages.user.waracareer', [
            ]);
        }

        return view('pages.user.waracareer', [
        ]);
    }

    public function getData(){
        $data = WaraCareer::all();
        return view('pages.user.waracareer',['data' => $data]);
    }

    public function daftar($id)
    {
        $career = WaraCareer::find($id);

        if (Auth::check()) {
            return view('pages.user.waracareerdaftar', compact('career'));
        }

        return view('pages.user.waracareerdaftar', compact('career'));
    }

    public function store(Request $request)
    {
        // Validasi input form
        $request->validate([
            'user_id' => 'required',
            'career_id' => 'required',
            'full_name' => 'required|string|max:64',
            'gender' => 'required|string|max:12',
            'date_of_birth' => 'required|date',
            'religion' => 'required|string|max:12',
            'email' => 'required|email|max:64',
            'phone_number' => 'required|string|max:15',
            'address' => 'required|string|max:128',
            'last_education' => 'required|string|max:12',
            'portfolio_url' => 'required|file|max:2048',
            'work_experience' => 'string|max:1000',
        ]);

        // Simpan data aplikasi pekerjaan baru
        $user = auth()->user(); // Mendapatkan user yang sedang login

        $portfolio = $request->file('portfolio_url');

        if ($portfolio) {
            // Unggah gambar ke Cloudinary
            $portfolio_link = CloudinaryStorage::uploadPortfolio($portfolio->getRealPath(), $portfolio->getClientOriginalName());

            // Buat objek transaksi baru berdasarkan data yang diterima
            JobApplication::create([
                'user_id' => $user->id,
                'career_id' => $request->input('career_id'),
                'full_name' => $request->input('full_name'),
                'gender' => $request->input('gender'),
                'date_of_birth' => $request->input('date_of_birth'),
                'religion' => $request->input('religion'),
                'email' => $request->input('email'),
                'phone_number' => $request->input('phone_number'),
                'address' => $request->input('address'),
                'last_education' => $request->input('last_education'),
                'portfolio_url' => $portfolio_link,
                'work_experience' => $request->input('work_experience'),
                'status' => 30302,
            ]);

            return view('pages.user.home.submitJob')->with('success', 'Lamaran Pekerjaan berhasil dikirim.');

        } else {
            // Tangani kasus ketika $portfolio adalah null
            $error_message = "File Portofolio tidak ditemukan.";
            return view('pages.user.home.errorTransaction')->with("error", $error_message);
        }
    }
}
