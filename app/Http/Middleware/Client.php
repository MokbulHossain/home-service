<?php

namespace App\Http\Middleware;

use Closure;

class Client
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
         if ($request->session()->get('Client') === true) {
             return $next($request);
        }
     return redirect()->route('client_login');
    }
}
