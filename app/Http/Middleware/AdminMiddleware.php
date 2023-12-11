<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class AdminMiddleware extends Middleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::users()->role === 'admin') {
            return $next($request);
        }
        
        return redirect('/login');
    }
}
