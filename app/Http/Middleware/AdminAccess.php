<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class AdminAccess
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
        if (Gate::allows('is_admin')) {
            return $next($request);
        }
        // return view('403'); *** THIS CODE WILL GENERATE THE ERROR "Call to a member function setCookie() on null", USE THE FOLLOWING CODE INSTEAD
        return response()->view('403');
        // abort(403, 'You are not authorized to do this action');
    }
}
