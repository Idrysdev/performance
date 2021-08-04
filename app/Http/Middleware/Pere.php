<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Pere
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
        if(!session()->has('pere')){
            return redirect()->route('parents.login-page');
        }

        return $next($request);
    }
}
