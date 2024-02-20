<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\WaraCareer;
use Illuminate\Support\Facades\Auth;

class WaracareerController extends Controller
{
    public function show($id)
    {
        $career = WaraCareer::find($id);
        return view('pages.user.waracareerdetail', compact('career'));
    }
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

    public function daftar($id)
    {
        $career = WaraCareer::find($id);

        if (Auth::check()) {
            return view('pages.user.waracareerdaftar', [
            ]);
        }

        return view('pages.user.waracareerdaftar', compact('career'));
    }
}
