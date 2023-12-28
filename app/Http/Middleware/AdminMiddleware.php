<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {   
        if (!auth()->user()->is_admin) {
            
            return $next($request);
        }
        abort(403);
    }

    /**
     * Check if the authenticated user is an admin.
     *
     * @return bool
     */
    protected function is_admin(): bool
    {
        return auth()->check() && auth()->user()->is_admin;
    }
}
