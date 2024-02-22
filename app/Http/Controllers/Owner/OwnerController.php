<?php

namespace App\Http\Controllers\Owner;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\Waralaba;
use Illuminate\Support\Facades\DB;


class OwnerController extends Controller
{

    public function dashboard()
    {
        $totalWaralabaByOwner = Waralaba::where('created_by', Auth::id())->count();
        $transactions = Transaction::whereIn('waralaba_id', function ($query) {
            $query->select('id')
                ->from('waralabas')
                ->where('created_by', auth()->id());
        })->get();

        // Menghitung jumlah transaksi 
        $totalTransactionByOwner = Transaction::whereIn('waralaba_id', function ($query) {
            $query->select('id')->from('waralabas')->where('created_by', Auth::id());
        })->count();

        $totalPendapatan = DB::table('transactions')
            ->whereIn('waralaba_id', function ($query) {
                $query->select('id')
                    ->from('waralabas')
                    ->where('created_by', auth()->id());
            })
            ->join('waralabas', 'transactions.waralaba_id', '=', 'waralabas.id')
            ->select(DB::raw('SUM(waralabas.price::numeric) as total_pendapatan'))
            ->first();

        if (Auth::check()) {
            return view('pages.owner.dashboard', compact('totalWaralabaByOwner', 'totalTransactionByOwner', 'totalPendapatan', 'transactions'));
        }

        return view('pages.owner.dashboard');
    }

}
