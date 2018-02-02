<?php

namespace App\Http\Middleware;

use Closure;

class Activated
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

        if($request->user()->active === 1){
            return $next($request);
        }

        return redirect()->route("login")->withErrors([
            "auth" => "user isn't activated"
        ]);
    }
}
