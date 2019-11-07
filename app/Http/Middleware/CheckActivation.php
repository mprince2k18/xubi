<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckActivation
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

      if (Auth::user()->active == 2) {
        return redirect(route('non_verified_unknown_user'));
      }

        return $next($request);
    }
}
