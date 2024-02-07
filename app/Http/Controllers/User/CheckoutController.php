<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout(Request $request)
    {
        // Ambil metode pembayaran yang dipilih dari form
        $paymentMethod = $request->input('payment_method');
        // Ambil nomor rekening yang terkait dengan metode pembayaran (bisa dari form atau dari sesi)
        $bankAccountNumber = $request->input('bank_account_number');

        // Proses checkout dan tampilkan halaman checkout dengan nomor rekening
        return view('checkout', ['paymentMethod' => $paymentMethod, 'bankAccountNumber' => $bankAccountNumber]);
    }
}
