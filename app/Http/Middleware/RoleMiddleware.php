<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle($request, Closure $next, ...$roles)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        foreach ($roles as $role) {
            // Jika pengguna memiliki peran yang sesuai, lanjutkan request
            if (Auth::user()->hasRole($role)) {
                return $next($request);
            }
        }

        // Jika tidak ada peran yang sesuai, arahkan sesuai dengan peran pengguna
        if (Auth::user()->role === 'admin') {
            return redirect()->route('admin.login'); // Ganti dengan nama route yang sesuai untuk admin
        } else {
            return redirect()->route('user.login'); // Ganti dengan nama route yang sesuai untuk user
        }
    }
}
