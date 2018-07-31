<?php

namespace App\Http\Middleware;

use Closure;

class CachedView
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @param  string|null $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        $response = $next($request);
        $response->header('Cache-Control', 'max-age=86400,public');

        return $response;
    }
}
