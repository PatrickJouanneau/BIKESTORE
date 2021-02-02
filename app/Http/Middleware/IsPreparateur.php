<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsPreparateur
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
        if (empty(session("profil")) || session("profil") != "Preparateur" && session("profil") != "Reparateur" && session("profil") != "Manager" && session("profil") != "Administratif") {
            return redirect('/');
        }
        return $next($request);
    }
}
