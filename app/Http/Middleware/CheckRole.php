<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @param  string[]  $roles
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        if (Auth::check()) {
            if (in_array(Auth::user()->role, $roles)) {
                return $next($request);
            }

            return back();
        }

        return $next($request);
    }
}
