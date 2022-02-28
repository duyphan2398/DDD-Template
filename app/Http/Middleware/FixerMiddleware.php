<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class FixerMiddleware
{
    protected $a;

    protected $b;

    protected $c;

    protected $d;

    public function handle(Request $request, Closure $next)
    {
        return $next($request);
    }
}
