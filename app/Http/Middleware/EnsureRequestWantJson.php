<?php

namespace App\Http\Middleware;

use Closure;

class EnsureRequestWantJson
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->get('Accept') == 'application/json') {
            return $next($request);
        }
        $request->headers->set('Accept', 'application/json');

        return $next($request);
    }
}
