<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SuksesController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return view('pages.user.home.success', [
            ]);
        }

        return view('pages.user.home.success', [
        ]);
    }
}
