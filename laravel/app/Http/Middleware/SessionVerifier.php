<?php

namespace App\Http\Middleware;

use Closure;

class SessionVerifier
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
    	if(!$request->session()->has('id')){
    		return redirect()->route('login.index');
    	}
        return $next($request);
    }
}
