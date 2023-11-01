<?php

namespace App\Http\Middleware\Home;

use Closure;
use DB;
class IsCloseMiddleware
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
       $req= DB::table('config')->select('webswitch')->first();
        //验证网站是否关闭
        if ($req['webswitch']=='关') {
            return redirect('errors/503');
        }else{
            return $next($request);
        }
       
    }
}
