<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
	//登录界面
    public function login(){
		
		return view('admin.login');
		
	}
	//检测登录的方法
	public function checkLogin(Request $request){
		//接收表单信息
		$uname = $request->input('uname');
		$upwd = md5($request->input('upwd'));
		//查询用户信息
		$result=DB::table('users')
							->select('uid','uname','uemail','uphone','upwd','head','isAdmin','rids')
							->where('uname','=',$uname)
							->where('upwd','=',$upwd)
							->first();
		//验证用户是否存在和密码是否正确
		if($upwd!=$result['upwd']){
			return error('/admin/login','嗯哼?密码不知道?',3);
		}

		if ($result['isAdmin']==0) {
			return error('/admin/login','对不起，你没有权限，请联系管理员',2);
		 }

		if($result){

			//写入session信息
			$request->session()->put('isAdmin','true');
			$request->session()->put('uid',$result['uid']);
			$request->session()->put('uname',$result['uname']);
			$request->session()->put('uemail',$result['uemail']);
			$request->session()->put('uphone',$result['uphone']);
			$request->session()->put('head',$result['head']);

			//读取用户的所有角色对应的权限  写入session
			//将字符串转换为数组
			//dd($result);
			$rolesArr=explode(',', $result['rids']);
			$allPermis=DB::table('role')->select('pids')->whereIn('rid',$rolesArr)->get();
			
			//将权限数组合并成一个数组
			$permisArr=[];
			$str='';
			foreach ($allPermis as $one) {
				$str.=$one['pids'].',';
			}

			//去掉最右侧的逗号
			$str=rtrim($str,',');
			//将权限字符串拆分成数组
			$permisArr=explode(',', $str);
			//dd($permisArr);
			//将权限信息存到session中
			$request->session()->put('permis',$permisArr);

			return redirect('/admin/index');
			
		}else{
			return redirect('/admin/login');
		}
		
	}
	//退出登录方法
	public function logout(Request $request){
		$request->session()->flush();
		return redirect('/admin/login');
	}
    
}
