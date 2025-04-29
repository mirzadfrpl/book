<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Pastikan ini ada

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, $role)
    {
        if (Auth::check() && Auth::user()->role !== $role) { // Menggunakan Auth::check() dan Auth::user()
            abort(403, 'Unauthorized');
        }

        return $next($request);
    }
}




