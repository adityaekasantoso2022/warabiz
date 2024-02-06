<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class WaracareerController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return view('pages.user.waracareer', [
            ]);
        }

        return view('pages.user.waracareer', [
        ]);
    }
}
