<?php

namespace App\Http\Controllers\Owner;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Articles;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Waralaba;
use Illuminate\Support\Facades\DB;


class OwnerController extends Controller
{
    
    public function dashboard()
    {
        $totalWaralabaByOwner = Waralaba::where('created_by', Auth::id())->count();

        $totalTransactionByOwner = Transaction::whereIn('waralaba_id', function($query){
            $query->select('id')->from('waralabas')->where('created_by', Auth::id());
        })->count();
        
        $totalPendapatan = DB::table('transactions')
    ->whereIn('waralaba_id', function($query) {
        $query->select('id')
            ->from('waralabas')
            ->where('created_by', auth()->id()); // Menggunakan auth()->id() untuk mendapatkan ID pengguna yang sedang login
    })
    ->join('waralabas', 'transactions.waralaba_id', '=', 'waralabas.id') // JOIN antara tabel 'transactions' dan 'waralabas'
    ->select(DB::raw('SUM(waralabas.price::numeric) as total_pendapatan'))
    ->first(); // Menggunakan first() untuk mengambil hasil kueri pertama

    

        // Jika pengguna telah login
        if (Auth::check()) {
            return view('pages.owner.dashboard', compact('totalWaralabaByOwner', 'totalTransactionByOwner', 'totalPendapatan'));
        }

        // Jika pengguna belum login
        return view('pages.owner.dashboard');
    }

}
