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
        // Get the authenticated user
        $user = Auth::user();

        // Assuming your roles are stored in a pivot table `users_has_role`
        if ($user->roles()->whereIn('role_name', $roles)->exists()) {
            return $next($request);
        }

        return redirect('unauthorized'); // or handle unauthorized access
    }
}
