<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ArtikelAdminController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return view('pages.admin.artikel', [
            ]);
        }

        return view('pages.admin.artikel', [
        ]);
    }
}
