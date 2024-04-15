<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Middleware2
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $nombresDesMots = str_word_count($request->mot);
        if($nombresDesMots >=2 ) {
            return redirect("home")->with("error", "Error : Le champ ne doivent pas dépasser 2 mots");
        }
        return $next($request);
    }
}
