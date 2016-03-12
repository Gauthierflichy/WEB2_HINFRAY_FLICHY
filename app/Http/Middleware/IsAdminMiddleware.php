<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;

class IsAdminMiddleware
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
        if($request->user()->role !== 'admin'){
            return redirect('/');
        }
        return $next($request);

    }
}
