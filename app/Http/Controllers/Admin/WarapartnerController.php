<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class WarapartnerController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return view('pages.user.warapartner', [
            ]);
        }

        return view('pages.user.warapartner', [
        ]);
    }
}
