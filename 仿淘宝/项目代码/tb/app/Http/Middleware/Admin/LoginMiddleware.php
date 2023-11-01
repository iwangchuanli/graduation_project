<?php

namespace App\Http\Middleware\Admin;

use Closure;
use DB;
class LoginMiddleware
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
        //登录权限验证
		//检测session中是否有登录信息
		if($request->session()->has('isAdmin') && $request->session()->has('uid') && $request->session()->has('uname')){

			//添加对应的权限验证 判断session中是否有对应的权限id
			//获取请求路径
			//查询permission表中的路径信息
			$uid=$request->session()->get('uid');
	
			$rid=DB::table('users')->where('uid','=',$uid)->select('rids')->get();
			$pids=DB::table('role')->where('rid','=',$rid)->select('pids')->get();

			$pid=explode(',',$pids[0]['pids']);
			
			$path=DB::table('permission')->select('purl')->get();
				
			foreach($path as $one){
				//dd($one);
				$two=DB::table('permission')->select('pid')->where('purl','=',$one)->first();
			
				if ($request->path() == $one['purl'] && !in_array($two['pid'],$request->session()->get('permis'))) {
					return error('/admin/index','对不起，没有该权限',2);
				}
				
			}
			return $next($request);
			
		}else{
			//返回登录页面
			return redirect('/admin/login');
		}
    }
}