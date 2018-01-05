<?php

namespace App\Http\Middleware;

use Closure;

class RedirectHTTP
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
        if($request->secure()) {
            return redirect($request->path());
        }

        return $next($request);
    }
}
