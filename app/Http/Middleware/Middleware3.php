<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Middleware3
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $word = $request->mot;

        for ($i = 0; $i < strlen($word) - 1; $i++) {
            if ($word[$i] == '.' && $word[$i + 1] == '.') {
                return redirect("home")->with("error", "Error : il y a 2 points consécutifs");
            }
        }

        return $next($request);
    }
}
