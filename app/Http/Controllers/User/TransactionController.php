<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'fullname' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'address' => 'required', // Perbaikan penulisan field 'address'
            'payment_method' => 'required',
            'waralaba_id' => 'required',
            'waralaba_name' => 'required',
        ]);

        $user = auth()->user(); // Mendapatkan user yang sedang login

        // Simpan transaction ke database
        $transaction = new Transaction();
        $transaction->user_id = $user->id;
        $transaction->fullname = $request->fullname;
        $transaction->email = $request->email;
        $transaction->phone_number = $request->phone_number;
        $transaction->address = $request->address; // Perbaikan penulisan field 'address'
        $transaction->payment_method = $request->payment_method;
        $transaction->waralaba_id = $request->waralaba_id;
        $transaction->waralaba_name = $request->waralaba_name;
        $transaction->save();

        // Redirect ke halaman sukses
        return view('pages.user.home.success');
    }
}
