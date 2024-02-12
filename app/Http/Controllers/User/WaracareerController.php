<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\WaraCareer;
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

    public function getData(){
        $data = WaraCareer::all();
        return view('pages.user.waracareer',['data' => $data]);
    }
}
