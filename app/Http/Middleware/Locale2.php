<?php

namespace App\Http\Middleware;

use Closure;
use Lang;
use Session;

class Locale2
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
        if (!Session::has('locale2')) {
            Session::put('locale2', config('app.locale'));
        }

        Lang::setLocale(Session::get('locale2'));

        return $next($request);
    }
}
