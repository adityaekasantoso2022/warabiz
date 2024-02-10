<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Testimonialhome;
use App\Models\TestimonialTraining;
use Illuminate\Http\Request;
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
