<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LangMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (session()->has('locale')) {
            App::setLocale(session()->get('locale'));
        }
        elseif ($request->hasHeader('Accept-Language')) {
            $browserLocale = substr($request->header('Accept-Language'), 0, 2);
            $supportedLocales = ['en', 'ar'];
            if (in_array($browserLocale, $supportedLocales)) {
                App::setLocale($browserLocale);
                Session::put('locale', $browserLocale);
            }
        } else {
            App::setLocale(config('app.fallback_locale'));
        }
        return $next($request);
    }
}
