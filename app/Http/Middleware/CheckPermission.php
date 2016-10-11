<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use User;

class CheckPermission
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
        if(Auth::check()){
          $admin = Auth::user()->admin;
          $employee = Auth::user()->employee;

          if($admin||$employee){
            return $next($request);
          }else{
            return redirect('errors/permission');
          }
        }else{
          return $next($request);
        }

    }
}
