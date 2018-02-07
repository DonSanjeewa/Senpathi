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

       if (!empty($permissions)){
           foreach ($permissions as $permission){

               $match = false;

               if ($permission->route_name === "*"){
                    $match = true;
               }

               if($curRoute === $permission->route_name){
                    $match = true;
               }

               if ($match && $permission->is_able){
                   return true;
               }
           }
       }

       return false;
    }

}
