<?php

namespace App\Http\Middleware;

use Closure;
use Redirect;
use TokenChef\IcoTemplate\Services\LocaleService;
use TokenChef\IcoTemplate\Services\StaticArray;

class DetectLanguage
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
        $lang = $this->detect_language();
        if ($lang && $lang !== 'en') {
            return Redirect::to('/' . $lang . '/' . $request->route()->uri);
        }
        return $next($request);
    }

    protected function detect_language()
    {
        $key = 'detected_language';
        $cached = \Session::get($key);
        if ($cached) {
            return $cached;
        } else {
            $lang = LocaleService::detect_locale();
            if (in_array($lang, StaticArray::SUPPORTED_LANGUAGES)) {
                \Session::put($key, $lang);
                return $lang;
            }else if (in_array($lang, StaticArray::DETECTED_LANGUAGE)) {
                $lang  = StaticArray::REDIRECTED_LANGUAGE[$lang];
                \Session::put($key, $lang);
                return $lang;
            }
        }
        return null;
    }
}
