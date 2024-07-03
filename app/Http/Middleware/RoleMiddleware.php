<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @param  string[]  ...$roles
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        $user = Auth::user();

        // Periksa jika pengguna memiliki salah satu dari peran yang diberikan
        foreach ($roles as $role) {
            if ($user->roles()->where('role_name', $role)->exists()) {
                return $next($request);
            }
        }

        // Jika pengguna tidak memiliki peran yang sesuai, redirect ke halaman tidak diizinkan
        return redirect('unauthorized');
    }
}
