<?php

namespace App\Http\Middleware;

use Closure;

class AdminLogin
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
        
       // echo session('admin');
        
       //session(['admin'=>NULL]);
       
       
        if(!session('admin')){
            return redirect('admin/login');
        }
        return $next($request);
    }
}
