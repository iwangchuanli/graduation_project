<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
   
    public function r_one()
    {
        //
        return view('home.register.r_one');
    }


    public function checkcode(Request $request)
    {
    	$u = $request->input('agreement');
    	if(!$u === 1){
    		return error('/r_one','请同意淘宝协议',3);
    	}else{
	    	if ($request->getMethod() === 'POST' && $request->has('mobile') && $request->has('ecode')) {
		    	//接收前台数据
		        $uname = $request->input('mobile');
		        $ecodeWrite = $request->input('ecode');

		        $ecodeTrue = $request->session()->get('code');
		       if($ecodeWrite == $ecodeTrue){

		       		$request->session()->put('uname',$uname);
		       		$request->session()->put('r_status',1);
		       		return redirect('/r_two');

		       }else{
		       		return error('/r_one','验证码不正确,请重新获取',3);
		       }
	  		}else{
	  			return error('/r_one','未知请求',3);
	  		}
		}
    }
    public function checkRegister(Request $request)
    {
    	//接收前台数据
        $uname = $request->input('uname');
        $uphone = $request->session()->get('uname');
        $r_status = $request->session()->get('r_status');
        $upwd = $request->input('pwd');
        $rpwd = $request->input('rpwd');

        //验证两次密码是否一致
		if($upwd != $rpwd){
			return error('/r_two','两次密码不一致',3);
		}

		$unameArr = DB::table('users')->lists('uname');
		if(in_array($uname,$unameArr)){
			if(in_array($uphone,$unameArr)){
				return error('/login','该手机已注册,请用手机号直接登录',3);
			}else{
				return error('/r_two','用户名已存在',3);
			}
			
		}else{

			$users['uname']=$uname;		
			$users['uphone']=$uphone;
			$users['upwd']=md5($upwd);
			$users['addtime']=time();
			//将用户数据插入数据库
			
			$result1 = DB::table('users')->insert($users);
			//判断用户是否插入成功
			if($result1){
				$result = DB::table('users')
	                    ->select('uname','uid','uphone','head')
	                    ->where('uname','=',$uname)
	                    ->where('upwd','=',$users['upwd'])
	                    ->first();
	                    
				$request->session()->put('uid',$result['uid']);
	            $request->session()->put('uname',$result['uname']);
	            $request->session()->put('head',$result['head']);
	            $request->session()->put('uphone',$result['uphone']);
	            $request->session()->put('r_status',$r_status);

	            return success('/r_three','注册用户成功',1);
			}else{
				$request->session()->flush();
				return error('/r_one','注册用户失败',3);

			}
		}
       
    }

 	public function r_two(Request $request)
    {
        //
       $uname = $request->session()->get('uname');

        return view('home.register.r_two',['uname'=>$uname]);

    }
 	public function r_three(Request $request)
    {
        //
    	$uname = $request->session()->get('uname');
    	$uid = $request->session()->get('uid');
    	$uphone = $request->session()->get('uphone');
        return view('home.register.r_three',['uname'=>$uname,'uid'=>$uid,'uphone'=>$uphone]);

    }

}
