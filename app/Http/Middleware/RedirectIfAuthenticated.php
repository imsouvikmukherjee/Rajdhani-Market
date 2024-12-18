<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle(Request $request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            // User is authenticated, redirect them away from the login page
            return redirect('/dashboard'); // Replace '/dashboard' with your desired redirect route
        }

        return $next($request);
    }
}
