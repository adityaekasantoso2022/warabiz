<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OwnerCheck
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->isOwner()) {
            return $next($request);
        }

        return redirect('/'); // Redirect ke halaman utama jika bukan admin
    }
}
