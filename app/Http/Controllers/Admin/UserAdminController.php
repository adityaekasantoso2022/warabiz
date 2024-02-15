<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User; // Import model User

class UserAdminController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $users = User::all();
            return view('pages.admin.user', compact('users'));
        }
        return view('pages.admin.user');
    }
}
