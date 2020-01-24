<?php

namespace laravelito\Http\Middleware;

use Closure;

/* MIDDLEWARE PARA FORZAR RESPUES JSON
y debido a que usamos Laravel solo como un proveedor de API,
vamos a obligar a todas las rutas a devolver json.  */

class ForceJsonResponse
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $request->headers->set('Accept', 'application/json');
        return $next($request);
    }
}
