<?php

namespace App\Http\Middleware\home;

use Closure;

class RegisterMiddleware
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
        //dd($request);
            $value = $request->session()->get('r_status');
            //注册时中间步骤的权限验证
            if($request->session()->has('uname') && ($value === 1) ){
                return $next($request);
            }else{
                //返回注册页面
            return redirect('/r_one');
            }

   
    }
}
