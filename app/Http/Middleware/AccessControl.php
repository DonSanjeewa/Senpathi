<?php

namespace App\Http\Middleware;

use App\User;
use Closure;

class AccessControl
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

        if($this->check($request)){
            return $next($request);
        };

        return redirect()->route("unauthorized");
    }

    private function check($request){

       $curRoute = $request->route()->getName();

       $permissions = $request->user()->permissions();

       if ($permissions){
           foreach ($permissions as $permission){

               if ($permission->route_name === "*"){
                   return true;
               }

               if($curRoute === $permission->route_name){
                   return true;

               }
           }
       }

       return false;
    }

}
