<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DetailController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return view('pages.user.detail', [
            ]);
        }

        return view('pages.user.detail', [
        ]);
    }
}
