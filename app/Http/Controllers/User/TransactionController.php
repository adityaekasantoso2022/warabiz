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
            // tambahkan validasi lainnya sesuai kebutuhan
        ]);

        // Simpan data transaksi ke dalam tabel transaction
        Transaction::create($validatedData);

        // Redirect atau response sesuai kebutuhan
        return redirect()->back()->with('success', 'Transaksi berhasil disimpan.');
    }
}
