<?php

namespace App\Http\Middleware;

use App\Models\Jobdesc;
use Closure;
use Illuminate\Support\Facades\View;

class AdminGlobalVariable
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
		$data['jobdescs'] = Jobdesc::all();
		View::share($data);
        return $next($request);
    }
}
