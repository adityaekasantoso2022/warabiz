<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Transaction;

class TransactionAdminController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return view('pages.admin.transaksi', [
            ]);
        }

        return view('pages.admin.transaksi', [
        ]);
    }


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

    public function transactionHistory()
    {
        // Get the authenticated user
        $user = auth()->user();

        // Retrieve the user's transactions
        $transactions = $user->transactions;

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
