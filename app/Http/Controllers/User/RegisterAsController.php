<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RegisterAsController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return view('auth.register-as', [
            ]);
        }

        return view('auth.register-as', [
        ]);
    }
}
