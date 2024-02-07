<?php

// app/Http/Controllers/PaymentController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchase;

class PaymentController extends Controller
{
    public function processPayment(Request $request)
    {
        // Validasi data dari form
        $validatedData = $request->validate([
            'fullname' => 'required|string',
            'email' => 'required|email',
            'phone_number' => 'required|string',
            'address' => 'required|string',
            'payment_method' => 'required|string',
            'transaction_total' => 'required|numeric',
            // Additional validation rules as needed
        ]);

        // Simpan data pembelian ke database
        $purchase = new Purchase();
        $purchase->fullname = $validatedData['fullname'];
        $purchase->email = $validatedData['email'];
        $purchase->number_phone = $validatedData['phone_number'];
        $purchase->address = $validatedData['address'];
        $purchase->payment_method = $validatedData['payment_method'];
        $purchase->transaction_total = $validatedData['transaction_total'];
        $purchase->save();

        // Redirect or response as needed
        return redirect()->back()->with('success', 'Pembelian berhasil diproses.');
    }
}
