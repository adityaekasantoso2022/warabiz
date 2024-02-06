<?php

// app/Http/Controllers/WaralabaController.php

namespace App\Http\Controllers\User;

use App\Models\Waralaba;    
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WaralabaController extends Controller
{
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
