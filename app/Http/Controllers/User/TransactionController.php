<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Http\Controllers\Controller;

class TransactionController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data dari formulir
        $validatedData = $request->validate([
            'fullname' => 'required|string',
            'email' => 'required|email',
            'phone_number' => 'required|string',
            'address' => 'required|string',
            'waralaba_id' => 'required|integer', // Menambahkan validasi untuk waralaba_id
            'waralaba_name' => 'required|string', // Menambahkan validasi untuk waralaba_id

            // tambahkan validasi lainnya sesuai kebutuhan
        ]);

        // Memasukkan waralaba_id ke dalam data yang akan disimpan
        $validatedData['waralaba_id'] = $request->waralaba_id;
        $validatedData['waralaba_name'] = $request->waralaba_name;


        // Simpan data transaksi ke dalam tabel transaction
        Transaction::create($validatedData);

        // Redirect atau response sesuai kebutuhan
        return redirect()->back()->with('success', 'Transaksi berhasil disimpan.');
    }
}
