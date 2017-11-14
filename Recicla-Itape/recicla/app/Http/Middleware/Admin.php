<?php

namespace App\Http\Middleware;

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
    public function handle($request, Closure $next,$user)
    {
        return redirect('/')
        /*echo "Role: " .$role;*/
     /*   if(Auth::user()->role == '3'){
            return redirect('/');
        }*/
        /*if (Auth::guard('admin')->check()) {
            return redirect('/admin');
        }
        else{
            return redirect('/cadastro/login');
        }
*/
        return $next($request);
    }
}
