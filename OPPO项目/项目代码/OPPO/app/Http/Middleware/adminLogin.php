<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Session;
use DB;
class adminlogin
{
     public function handle($request,Closure $next){
		 //登录权限验证
		 //检测session中是否有登录信息
		 if($request->session()->has('isadmin') && $request->session()->has('uid') &&  $request->session()->has('uname')){
			 /*******************************************************************************
			 *******************************************************************************
			 进行一个验证
			 dd($request->path());
			 dd($request->session()->get('power'));
			 //在此处添加对应的权限验证  1.SESSION中是否有对应的权限ID
			//获取请求路径注意路径前有没有/
			if($request->path() == 'admin/user/list' && !in_array(4,$request->session()->get('power'))){
				return error('/admin','对不起,没有商品添加权限',3);
			}
			return $next($request);
			***********************************************************************************
			***********************************************************************************/
			//  遍历 角色列表
		 	$ridStr = $request->Session()->get('rid');
            $ridArr = explode(',', $ridStr);
            $roleStr = '';
            foreach ( $ridArr as $one )
            {
                //  遍历每个角色的权限  获得path
                $res = DB::table('role') -> where('rid',$one) ->first();
				 
                $pid = $res['pid'];
				
                $arr = explode(',',$pid);
				
                //  遍历 权限数据库，把path组成一个字符串 
                $str = '';
                foreach ( $arr as $a )
                {
                    $b = DB::table('power') -> where('pid',$a) -> first();
                    $str .= $b['purl'].',';
                }
                $str = rtrim($str,',');

                $roleStr .= $str.',';
				
            }

            //  获得用户所有的权限字符串
            $roleStr = rtrim($roleStr,',');
			 
            $roleArr = explode(',',$roleStr);
            if ( $request->path() == 'admin/index' )
            {
                return $next($request);
            }
			//dd($request->path());
			
            //  判断此次访问的url 是否在允许的范围内
            if ( !in_array($request->path(),$roleArr) )
            {
                return error('/admin/index','对不起,没有权限',2);
            }
            else
            { 
                return $next($request);
             }
		 }else{
			 //返回登录页面
			 return redirect('/admin');
		 }
	 }
}
