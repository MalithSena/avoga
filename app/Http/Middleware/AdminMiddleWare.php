<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleWare
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->user() && $request->user()->role != 'admin' && $request->user()->role != 'editor') {
            abort(403, 'You are not authorized to do this action');
        }
        return $next($request);
        return $next($request);
    }
}
