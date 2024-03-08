<?php

namespace App\Http\Controllers\Owner;

use App\Models\JobApplication;
use App\Models\WaraCareer;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\Waralaba;
use Illuminate\Support\Facades\DB;
use App\Models\VerifiedOwner;
use Illuminate\Http\Request;




class OwnerController extends Controller
{
    public function editProfile()
    {
        $user = Auth::user();
        $ownerVerified = VerifiedOwner::where('user_id', $user->id)->first(); // Mengambil data dari tabel owner_verified yang sesuai dengan user_id
    
        return view('pages.owner.profile', compact('user', 'ownerVerified'));
    }
    public function updateProfile(Request $request)
{
    $user = Auth::user();
    $ownerVerified = VerifiedOwner::where('user_id', $user->id)->first();

    $request->validate([
        'company_name' => 'required|string|max:64',
        'company_category' => 'required|string|max:64',
        'npwp' => 'required|string|max:64',
        'bank_name' => 'required|string|max:64', // Mengubah validasi menjadi string
        'account_number' => 'required|string|max:64', // Mengubah validasi menjadi string
    ]);

    $ownerVerified->company_name = $request->input('company_name');
    $ownerVerified->company_category = $request->input('company_category');
    $ownerVerified->npwp = $request->input('npwp');
    $ownerVerified->bank_name = $request->input('bank_name');
    $ownerVerified->account_number = $request->input('account_number');

    $ownerVerified->save();

    return redirect()->route('home')->with('success', 'Profil berhasil diperbarui.');
}

    
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

