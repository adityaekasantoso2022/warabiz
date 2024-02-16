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
        $transactions = Transaction::all();
        return view('pages.admin.transaction', compact('transactions'));
    }


    // Menampilkan formulir untuk mengedit transaction
    public function edit($id)
    {
        $transaction = Transaction::findOrFail($id);
        return view('pages.admin.edit.transaction', compact('transaction'));
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
        return redirect()->route('admin.transactions')->with('success', 'Data transaksi berhasil diperbarui');
    }

    public function show($id)
    {
        // Cari transaksi berdasarkan UUID
        $transaction = Transaction::where('id', $id)->first();

        // Jika transaksi tidak ditemukan, bisa ditangani sesuai kebutuhan
        if (!$transaction) {
            return redirect()->view('pages.admin.error');
        }

        // Tampilkan halaman dengan detail transaksi
        return view('pages.admin.transactiondetail', ['transaction' => $transaction]);
    }

    public function destroy($id)
    {
        $article = Transaction::findOrFail($id);
        $article->delete();
        return redirect()->route('admin.transactions')->with('success', 'Artikel berhasil dihapus.');
    }

}
