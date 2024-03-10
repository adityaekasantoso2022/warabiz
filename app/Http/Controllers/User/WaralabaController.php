<?php

namespace App\Http\Controllers\User;

use App\Models\Waralaba;
use App\Models\VerifiedOwner;
use App\Models\Transaction;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class WaralabaController extends Controller
{
    public function show($id)
    {
        $waralaba = Waralaba::with(['verifiedOwner', 'category'])->find($id);

        if (!$waralaba) {
            return abort(404);
        }

        // Mendapatkan company_name dari tabel verified_owner
        $companyName = $waralaba->verifiedOwner->company_name ?? "Admin Warabiz";

        // Menghitung jumlah waralaba yang telah dibuat oleh owner berdasarkan user_id
        $totalWaralaba = Waralaba::join('verified_owner', function ($join) use ($waralaba) {
            $join->on('waralabas.created_by', '=', DB::raw('CAST(verified_owner.user_id AS VARCHAR)'))
                ->where('verified_owner.user_id', '=', $waralaba->verifiedOwner->user_id ?? null);
        })->count();

        // Mendapatkan Nama Category dari Table Category
        $categories = Category::pluck('category_name', 'id');

        return view('pages.user.waralabadetail', compact('waralaba', 'companyName', 'totalWaralaba', 'categories'));
    }

    public function checkout($id)
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
        $transaction = Transaction::findOrFail($id);

        // Pastikan transaksi yang ditemukan memiliki properti 'payment_method'
        if (!$transaction->payment_method) {
            return abort(404);
        }

        // Ambil waralaba terkait dengan transaksi
        $waralaba = $transaction->waralaba;

        return view('pages.user.home.submit', compact('waralaba', 'transaction'));
    }

    public function getByCategory($category_id)
    {
        // Assuming you have a Category model
        $category = Category::find($category_id);

        if (!$category) {
            return abort(404, 'Category not found');
        }

        // Fetch Waralaba records for the specified category_id
        $waralabas = Waralaba::where('category_id', $category_id)->get();

        return view('pages.user.waralabacategory', compact('waralabas', 'category'));
    }
}
