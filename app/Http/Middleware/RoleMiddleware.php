<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        $user = $request->user();

        // Check if the user's role matches the required role
        if ($user->role !== $role) {
            // Redirect based on role if they are trying to access the wrong dashboard
            if ($user->role === 'admin') {
                return redirect('/admin/dashboard');
            } elseif ($user->role === 'master') {
                return redirect('/master/dashboard');
            } else {
                return redirect('/dashboard');
            }
        }
        return $next($request);
    }
}
