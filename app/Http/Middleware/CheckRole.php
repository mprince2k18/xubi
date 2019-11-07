<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckRole
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

      // if (Auth::user()->active == 2) {
      //
      //    return redirect(route('non_verified_unknown_user'));
      // }

      if (Auth::user()->role_id == 4) {

         return redirect(route('non_verified_user'));
      }



        return $next($request);
    }
}
