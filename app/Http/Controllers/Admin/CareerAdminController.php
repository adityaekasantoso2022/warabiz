<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\WaraCareer;


class CareerAdminController extends Controller
{
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
}
