<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Session;
use DB;
use Closure;


class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$rol)
    {
        $correo=Session::get('email');
        if($correo==null)
        {
            return redirect('/danielquijanosesion');     
        }
        else
            if($correo=='danielalejandroquijanosanchez@gmail.com'){
                $id=1;
                if($id==1)
                {
                    return $next($request);
                }    
        }
        else{
                    return redirect('/danielquijanosesion');     
            }   
    }
}
