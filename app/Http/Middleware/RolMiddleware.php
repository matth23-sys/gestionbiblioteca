<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RolMiddleware
{
    public function handle(Request $request, Closure $next, $rol)
    {
        if (auth()->check() && auth()->user()->rol === $rol) {
            return $next($request);
        }

        abort(403, 'Acceso no autorizado');
    }
}
