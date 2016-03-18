<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
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

        if ($user != $isAdmin) {
            return redirect('/public'); //ça ne sert à rien ici mais on sait à quoi ça sert
        }

        return $next($request);
    }
}