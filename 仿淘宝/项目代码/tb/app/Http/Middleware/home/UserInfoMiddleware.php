<?php

namespace App\Http\Middleware\home;

use Closure;

class UserInfoMiddleware
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
         if(!session('uname')){
            return redirect('/login');
        }
        return $next($request);
    }
}
