<?php

namespace App\Http\Middleware\Admin;

use Closure;

class Auth
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
            return redirect()->route('admin.auth.index');
        }
        return $next($request);
    }
}
