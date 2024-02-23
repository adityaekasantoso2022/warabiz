<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\Waralaba;
use App\Http\Controllers\CloudinaryStorage;
use Illuminate\Http\Request;

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
    public function edit($id)
    {
        $transaction = Transaction::findOrFail($id);
        return view('pages.owner.edit.transaction', compact('transaction'));
    }

    // Memperbarui transaction dalam database
    public function update(Request $request, $id)
    {
        // Validasi input dari form
        $request->validate([
            'status' => 'required',
        ]);

        // Cari transaksi berdasarkan ID
        $transaction = Transaction::findOrFail($id);

        // Update data transaksi
        $transaction->update($request->all());

        // Redirect atau berikan respons sesuai kebutuhan
        return redirect()->route('owner.transactions')->with('success', 'Data transaksi berhasil diperbarui');
    }

    public function show($id)
    {
        // Cari transaksi berdasarkan UUID
        $transaction = Transaction::where('id', $id)->first();

        // Jika transaksi tidak ditemukan, bisa ditangani sesuai kebutuhan
        if (!$transaction) {
            return redirect()->view('pages.owner.error');
        }

        // Tampilkan halaman dengan detail transaksi
        return view('pages.owner.transactiondetail', ['transaction' => $transaction]);
    }

    public function destroy($id)
    {
        $transaction = Transaction::findOrFail($id);

        // Menghapus Bukti Pembayaran
        CloudinaryStorage::deletePayment($transaction->payment_proof);

        $transaction->delete();
        return redirect()->route('owner.transactions')->with('success', 'Artikel berhasil dihapus.');
    }

}
