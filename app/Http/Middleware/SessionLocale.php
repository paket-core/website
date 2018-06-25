<?php

namespace App\Http\Middleware;

use Closure;
use TokenChef\IcoTemplate\Services\LocaleService;

/**
 * Store language in session variable
 *
 * Class SessionLocale
 * @package App\Http\Middleware
 */
class SessionLocale
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        LocaleService::set_locale();
        return $next($request);
    }


}
