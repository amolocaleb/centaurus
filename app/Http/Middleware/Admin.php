<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
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
        if (Auth::check() && Auth::user()->isAdmin())
        {
            return $next($request);
        }
        return redirect('/login')
                ->with(['error_msg'=>'Perforing this action requires elevated privileges.You are not authorised']);
    }
}
