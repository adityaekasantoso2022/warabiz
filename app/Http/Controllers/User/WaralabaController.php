<?php

// app/Http/Controllers/User/WaralabaController.php

namespace App\Http\Controllers\User;

use App\Models\Waralaba;
use App\Models\Transaction;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WaralabaController extends Controller
{
    public function show($id)
    {
        $waralaba = Waralaba::find($id);
    
        if (!$waralaba) {
            return abort(404);
        }
    
        return view('pages.user.detail', compact('waralaba'));
    }    
    
    public function show2($id)
    {
        $waralaba = Waralaba::findOrFail($id);
        return view('pages.user.home.payment', compact('waralaba'));

    }
    public function show3($id)
    {
        $waralaba = Waralaba::findOrFail($id);
        return view('pages.user.home.submit', compact('waralaba'));

    }
    public function pembayaran($id)
    {
        $waralaba = Transaction::findOrFail($id);
        $transaction = Transaction::findOrFail($id);

        $transaction = $transaction->transaction; // Mengambil transaksi terkait

        return view('pages.user.home.submit', compact( 'waralaba','transaction'));
    }
}
