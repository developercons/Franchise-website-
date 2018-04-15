<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckCandidatAccount
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
        if(Auth::guard('candidat')->user()->is_active) {
            return $next($request);
        }

        return redirect('candidatheque/candidat');
       
    }
}
