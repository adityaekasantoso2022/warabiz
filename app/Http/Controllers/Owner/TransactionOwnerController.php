<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\Waralaba;
use Illuminate\Support\Facades\Auth;

class TransactionOwnerController extends Controller
{
    public function index()
    {
        // Mendapatkan user_id yang saat ini masuk
        $user_id = Auth::id();

        // Mengambil data waralaba yang dibuat oleh pengguna dengan user_id tertentu
        $waralabas = Waralaba::where('created_by', $user_id)->pluck('id');

        // Mengambil data transaksi yang berasal dari waralaba yang dibuat oleh pengguna
        $transactions = Transaction::whereIn('waralaba_id', $waralabas)->get();

        return view('pages.owner.transaction', compact('transactions'));
    }
}
