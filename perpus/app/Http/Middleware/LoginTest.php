<?php

namespace App\Http\Middleware;

use Closure;

class LoginTest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!auth()->guard('admin')->check()) {
            return redirect()->route('logintest.index');
        }
        return $next($request);
    }
}
