<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

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

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('pages.admin.edit.user', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'role' => 'required|in:admin,user,owner',
        ]);

        $user = User::findOrFail($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
        ]);

        return redirect()->route('admin.user')->with('success', 'Pengguna berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);

        // Hapus faqs yang merujuk ke user yang akan dihapus
        $user->faqs()->delete();

        // Pastikan admin dapat menghapus user
        if (auth()->user()->isAdmin()) {
            $user->delete();

            return redirect()->route('admin.user')->with('success', 'User berhasil dihapus');
        } else {
            return redirect()->route('admin.user')->with('error', 'Anda tidak memiliki izin untuk menghapus user');
        }
    }
}
