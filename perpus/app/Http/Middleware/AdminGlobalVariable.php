<?php

namespace App\Http\Middleware;

use App\Models\Jobdesc;
use App\Models\Bookcategory;
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
		$data['bookcategories'] = Bookcategory::all();
		View::share($data);
        return $next($request);
    }
}
