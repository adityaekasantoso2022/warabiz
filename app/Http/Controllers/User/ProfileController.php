<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function editProfile()
    {
        $user = Auth::user();
        return view('pages.user.edituser', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:64',
            'email' => 'required|email|unique:users,email,' . $user->id,
            // Tambahkan validasi lainnya sesuai kebutuhan
        ]);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        // Tambahkan atribut profil lainnya sesuai kebutuhan

        $user->save();

        return redirect()->route('home')->with('success', 'Profil berhasil diperbarui.');
    }
}
