<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class Language
{
    public function handle($request, Closure $next)
    {
        if (Session::has("locale")) {
            App::setLocale(Session::get("locale"));
        } else {
            // La langue par défaut (en cas d'absence de "locale" en session)
            App::setLocale("en");
        }

        return $next($request);
    }
}
