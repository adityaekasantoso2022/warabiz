<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\WaraCareer;


class CareerAdminController extends Controller
{
    //Mengambil data pekerjaan
    public function index()
    {
        if (Auth::check()) {
            $careers = WaraCareer::all();

            return view('pages.admin.career', [
                'careers' => $careers
            ]);
        }

        return view('pages.admin.career');
    }

    //Hapus pekerjaan
    public function destroy($id)
    {
        $career = WaraCareer::findOrFail($id);
        $career->delete();
        return redirect()->route('admin.career')->with('success', 'Pekerjaan berhasil dihapus.');
    }
}
