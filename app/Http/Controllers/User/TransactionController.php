<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\CloudinaryStorage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'user_id' => 'required',
            'fullname' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'address' => 'required',
            'payment_method' => 'required',
            'waralaba_id' => 'required',
            'waralaba_name' => 'required',
            'payment_proof' => 'required',
        ]);

        $user = auth()->user(); // Mendapatkan user yang sedang login

        $verif_payment = $request->file('payment_proof');

        if ($verif_payment) {
            // Unggah gambar ke Cloudinary
            $payment = CloudinaryStorage::uploadSecureFile($verif_payment, $verif_payment->getClientOriginalName());

            // Buat objek transaksi baru berdasarkan data yang diterima
            Transaction::create([
                'user_id' => $user->id,
                'fullname' => $request->input('fullname'),
                'email' => $request->input('email'),
                'phone_number' => $request->input('phone_number'),
                'address' => $request->input('address'),
                'payment_method' => $request->input('payment_method'),
                'waralaba_id' => $request->input('waralaba_id'),
                'waralaba_name' => $request->input('waralaba_name'),
                'payment_proof' => $payment,
                'total_payment' => $request->input('total_payment'),

            ]);

            return view('pages.user.home.success')->with('success', 'Waralaba berhasil dibuat.');

        } else {
            // Tangani kasus ketika $verif_payment adalah null
            $error_message = "File verifikasi pembayaran tidak ditemukan.";
            return view('pages.user.home.errorTransaction')->with("error", $error_message);
        }
    }

    public function transactionHistory()
    {
        // Get the authenticated user
        $user = auth()->user();

        // Check if user exists and has transactions
        if ($user && $user->transactions()->exists()) {
            // Retrieve the user's transactions
            $transactions = $user->transactions;
        } else {
            // If user doesn't have transactions or is null, return appropriate response
            $transactions = collect(); // Return an empty collection
            // You can also customize this response as needed, like showing a message indicating no transactions
        }

        // Pass the transactions to the view
        return view('pages.user.transactionhistory', compact('transactions'));
    }

    public function showDetail($transactionId)
    {
        $transaction = Transaction::findOrFail($transactionId);

        // Check if the authenticated user owns the transaction or has the necessary permissions
        if (Auth::user()->id !== $transaction->user_id) {
            abort(403, 'Unauthorized action.');
        }

        return view('pages.user.transactiondetail', compact('transaction'));
    }
}
