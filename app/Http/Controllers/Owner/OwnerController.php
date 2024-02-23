<?php

namespace App\Http\Controllers\Owner;

use App\Models\JobApplication;
use App\Models\WaraCareer;
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

        $totalTransactionByOwner = Transaction::whereIn('waralaba_id', function ($query) {
            $query->select('id')->from('waralabas')->where('created_by', Auth::id());
        })->count();

        $totalJobsByOwner = WaraCareer::where('created_by', Auth::id())->count();

        $ownerId = Auth::id();
        $totalApplicantsByOwner = JobApplication::whereHas('career', function ($query) use ($ownerId) {
            $query->where('created_by', $ownerId);
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

        $transaksiTerbaru = DB::table('transactions')
            ->join('waralabas', 'transactions.waralaba_id', '=', 'waralabas.id')
            ->where('waralabas.created_by', auth()->id())
            ->orderByDesc('transactions.created_at')
            ->select('transactions.created_at', 'waralabas.price as harga_waralaba')
            ->first();


        if (Auth::check()) {
            return view('pages.owner.dashboard', compact('totalWaralabaByOwner', 'totalTransactionByOwner', 'totalPendapatan', 'transactions', 'transaksiTerbaru', 'totalJobsByOwner', 'totalApplicantsByOwner'));
        }

        return view('pages.owner.dashboard');
    }

}
