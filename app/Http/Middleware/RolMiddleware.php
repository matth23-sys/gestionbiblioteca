<?php
/*
 antiguo rol

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RolMiddleware
{ 
    public function handle(Request $request, Closure $next, $rol)
    { 
        if (!Auth::check()) {
            return redirect('/login');
        }

        $user = Auth::user();

        if ($user->rol !== $rol) {
            abort(403, 'Acceso no autorizado');
        }

        return $next($request); 
    }
}

*/

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RolMiddleware
{
    public function handle(Request $request, Closure $next, $rol = null)
    {
        // Si el usuario no está autenticado, redirigir al login
        if (!Auth::check()) {
            return redirect('/login');
        }

        // Ya no se verifica el rol, se permite acceso a cualquier usuario autenticado
        return $next($request);
    }
}
