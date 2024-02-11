<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class WaraeduController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return view('pages.user.waraedu', [
            ]);
        }

        return view('pages.user.waraedu', [
        ]);
    }
}
