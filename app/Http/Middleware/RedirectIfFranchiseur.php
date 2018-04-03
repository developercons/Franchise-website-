<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfFranchiseur
{
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @param  string|null  $guard
	 * @return mixed
	 */
	public function handle($request, Closure $next, $guard = 'franchiseur')
	{
	    if (Auth::guard($guard)->check()) {
	        return redirect('candidatheque/franchiseur');
	    }

	    return $next($request);
	}
}