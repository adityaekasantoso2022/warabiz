<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Testimonialhome;
use App\Models\TestimonialTraining;
use App\Models\Waralaba;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $waralabas = Waralaba::all();

        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $waralabas = Waralaba::where('waralaba_name', 'like', '%' . $searchTerm . '%')->get();
        }

        if (Auth::check()) {
            return view('pages.user.home.index', [
                'waralabas' => $waralabas,
            ]);
        }

        return view('pages.user.home', [
            'waralabas' => $waralabas,
        ]);
    }
    public function show($id)
    {
        // Menggunakan model Waralaba untuk mengambil data dari database
        $waralaba = Waralaba::find($id);
    
        // Periksa jika data waralaba ditemukan
        if (!$waralaba) {
            return abort(404); // Tampilkan error 404 jika data tidak ditemukan
        }
    
        return view('pages.user.detail', compact('waralaba'));
    }    
}
