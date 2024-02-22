<?php

namespace App\Http\Controllers\Owner;

use App\Models\WaraCareer;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CareerOwnerController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $careers = WaraCareer::all();
            return view('pages.owner.career', [
                'careers' => $careers
            ]);
        }
        return view('pages.owner.career');
    }
}