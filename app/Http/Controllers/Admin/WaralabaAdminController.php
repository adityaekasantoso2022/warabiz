<?php

namespace App\Http\Controllers\Admin;

use App\Models\Waralaba;
use App\Models\Transaction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class WaralabaAdminController extends Controller
{
    public function index(Request $request)
    {
        $waralabas = Waralaba::all();

        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $waralabas = Waralaba::where('waralaba_name', 'like', '%' . $searchTerm . '%')->get();
        }

        if (Auth::check()) {
            return view('pages.admin.waralaba', [
                'waralabas' => $waralabas,
            ]);
        }

        return view('pages.admin.waralaba', compact('waralabas'));
    }

    public function show($id)
    {
        $waralaba = Waralaba::find($id);

        if (!$waralaba) {
            return abort(404);
        }

        return view('pages.admin.waralabadetail', compact('waralaba'));
    }

    public function detail($id)
    {
        // Mengambil data transaksi berdasarkan ID
        $transaction = Transaction::findOrFail($id);

        // Mengirimkan data transaksi ke view 'waralaba.detail'
        return view('pages.admin.waralabadetail', compact('transaction'));
    }
}
