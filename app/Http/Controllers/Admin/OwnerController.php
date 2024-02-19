<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Articles;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Waralaba;

class OwnerController extends Controller
{
    public function dashboard()
    {
        // Jika pengguna telah login
        if (Auth::check()) {
            return view('pages.owner.dashboard');
        }

        // Jika pengguna belum login
        return view('pages.owner.dashboard');
    }

}
