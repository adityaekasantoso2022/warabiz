<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Waralaba;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(Request $request, $id = null)
    {
        // Mendapatkan semua waralaba
        $waralabas = Waralaba::all();

        // Jika pengguna telah login
        if (Auth::check()) {
            // Jika pengguna adalah owner, arahkan ke dashboard owner
            if (Auth::user()->role == 'owner') {
                return redirect()->route('owner.dashboard');
            }

            // Jika pengguna adalah user dan memiliki ID kategori, tampilkan waralaba berdasarkan kategori
            if ($id) {
                $category = Category::find($id);

                // Jika kategori tidak ditemukan, bisa dihandle sesuai kebutuhan
                if (!$category) {
                    abort(404, 'Kategori tidak ditemukan');
                }

                // Mendapatkan daftar waralaba berdasarkan kategori
                $waralabas = Waralaba::where('category_id', $category->id)->get();

                return view('pages.user.waralabacategory', compact('category', 'waralabas'));
            }
            return view('pages.user.home.index', [
                'waralabas' => $waralabas,
                'categoryChunks' => $this->chunkCategories(), 
                'active' => true, 
            ]);
        }

        // Jika pengguna belum login, tampilkan halaman home tanpa peran tertentu
        return view('pages.user.home', [
            'waralabas' => $waralabas,
            'categoryChunks' => $this->chunkCategories(), // Add this line to send categoryChunks
            'active' => true, // Set the initial value of $active
        ]);
    }

    private function chunkCategories()
    {
        $categories = Category::all();
        return $categories->chunk(4); 
    }
}
