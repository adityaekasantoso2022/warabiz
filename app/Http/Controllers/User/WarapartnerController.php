<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\CloudinaryStorage;
use App\Http\Controllers\Controller;
use App\Models\VerifiedOwner;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class WarapartnerController extends Controller
{
    public function index()
    {
        if (Auth::check()) {

            $user = Auth::user()->id;

            $verifiedOwner = VerifiedOwner::where('user_id', auth()->id())->first();

            return view('pages.user.warapartner', compact('verifiedOwner'));
        }

        return view('pages.user.home', [
        ]);
    }

    public function store(Request $request)
    {
        if (Auth::check()) {
            // dd(request()->all());
            $request->validate([
                'user_id' => 'required',
                'fullname' => 'required|string',
                'email' => 'required',
                'address' => 'required|string',
                'phone_number' => 'required|max:14',
                'ktp_upload' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'nik_number' => 'required',
                'company_name' => 'required|string',
                'company_category' => 'required',
                'company_pict' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'npwp' => 'required',
                'bank_name' => 'required',
                'account_number' => 'required',
            ]);

            $user = auth()->user();

            $ktp = $request->file('ktp_upload');
            $companyPict = $request->file('company_pict');

            if ($ktp && $companyPict) {
                // Unggah gambar ke Cloudinary
                $ktpUrl = CloudinaryStorage::uploadOwnerVerification($ktp->getRealPath(), $ktp->getClientOriginalName());
                $companyPictUrl = CloudinaryStorage::upload($companyPict->getRealPath(), $companyPict->getClientOriginalName());

                // Buat objek transaksi baru berdasarkan data yang diterima
                VerifiedOwner::create([
                    'user_id' => $user->id,
                    'fullname' => $request->input('fullname'),
                    'email' => $request->input('email'),
                    'address' => $request->input('address'),
                    'phone_number' => $request->input('phone_number'),
                    'ktp_upload' => $ktpUrl,
                    'nik_number' => $request->input('nik_number'),
                    'company_name' => $request->input('company_name'),
                    'company_category' => $request->input('company_category'),
                    'company_pict' => $companyPictUrl,
                    'npwp' => $request->input('npwp'),
                    'bank_name' => $request->input('bank_name'),
                    'account_number' => $request->input('account_number'),
                    'status'=> '2',
                ]);

                return redirect()->back()->with('success', 'Pengajuan Terkirim.');

            } else {
                // Tangani kasus ketika file adalah null
                $error_message = "Mohon isi data data yang diperlukan";
                return view('pages.user.home.errorTransaction')->with("error", $error_message);
            }
        }
        return view('pages.user.home', [
        ]);
    }
}
