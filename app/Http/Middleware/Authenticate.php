<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            if (Auth::check() && Auth::user()->isAdmin()) {
                return route('admin.dashboard'); // Redirect ke dashboard admin jika pengguna adalah admin
            } else {
                return route('login'); // Jika pengguna bukan admin, redirect ke halaman login
            }
        }
    }
}
