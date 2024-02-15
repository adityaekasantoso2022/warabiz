<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function dashboard()
    {
        // Jika pengguna telah login
        if (Auth::check()) {
            return view('pages.admin.dashboard');
        }

        // Jika pengguna belum login
        return view('pages.admin.dashboard');
    }
}
