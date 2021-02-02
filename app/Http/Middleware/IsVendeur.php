<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsVendeur
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

        if (!empty(session("profil"))) {
           // error_log("mon profil est '" . session("profil") . "'");
        }
        if (empty(session("profil")) || (session("profil") != "Vendeur" && session("profil") != "Administratif")) {
            error_log("je suis vendeur");
            return redirect('/');
        } else {
            error_log("je ne suis pas vendeur");
        }
        return $next($request);
    }
}
