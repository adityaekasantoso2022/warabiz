<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Testimonialhome;
use App\Models\TestimonialTraining;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return view('pages.user.home.index', [
            ]);
        }
        return view('pages.user.home', [
        ]);
        $products = Waralaba::all();

    return view('your.blade.view', compact('products'));
    }
}
