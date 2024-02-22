<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Waralaba;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        // Mendapatkan semua waralaba
        $waralabas = Waralaba::all();

        // Jika terdapat parameter 'search' pada URL
        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $waralabas = Waralaba::where('waralaba_name', 'like', '%' . $searchTerm . '%')->get();
        }

        // Jika pengguna telah login
        if (Auth::check()) {
            // Jika pengguna adalah owner, arahkan ke dashboard owner
            if (Auth::user()->role == 'owner') {
                return redirect()->route('owner.dashboard');
            }

            // Jika pengguna adalah user, tampilkan halaman user
            return view('pages.user.home.index', [
                'waralabas' => $waralabas,
            ]);
        }

        // Jika pengguna belum login, tampilkan halaman home tanpa peran tertentu
        return view('pages.user.home', [
            'waralabas' => $waralabas,
        ]);
    }       
}
