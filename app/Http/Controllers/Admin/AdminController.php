<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Articles;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Waralaba;

class AdminController extends Controller
{
    public function dashboard()
    {
        // Menjumlahkan total pada masing2 tabel data
        $totalUser = User::count();
        $totalWaralaba = Waralaba::count();
        $totalTransaction = Transaction::count();
        $totalArticle = Articles::count();

        // Get semua data transaksi untuk history transaksi
        $transactions = Transaction::all();

        // Jika pengguna telah login
        if (Auth::check()) {
            return view('pages.admin.dashboard', compact('totalUser', 'totalWaralaba', 'totalTransaction', 'totalArticle', 'transactions'));
        }

        // Jika pengguna belum login
        return view('pages.admin.dashboard');
    }

}
