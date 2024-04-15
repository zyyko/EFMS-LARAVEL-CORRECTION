<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Middleware1
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Question 4 : Middleware 1 verification des charactères 

        if(strlen($request->mot) >10) {
            return redirect("home")->with("error", "Erreur : Le mot ne doit pas dépasser 10 caractères");
        }
        return $next($request);
    }
}
