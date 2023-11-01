<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;

class LoginController extends Controller
{
    
	public function index(Request $request){
		//解收表单信息
		 $uname=$request->input('uname');
		 $upwd=$request->input('upwd');
		 $upwd=md5($upwd);
		//查询用户信息
		$result=DB::table('user')
						->select('uid','uname','rid')
						->where('uname','=',$uname)
						->where('upwd','=',$upwd)
						->first();
		//验证用户是否存在 并且用户名和密码是否正确
		if($result){
			//查询到用户
			//写入session信息
			//用户id
			$request->session()->put('uid',$result['uid']);
			//用户名
			$request->session()->put('uname',$result['uname']);
			//echo '成功';
			return  redirect('/');
		}else{
			return redirect('/login');
		}
		 
		
	}
	
	//注册插入数据库
	public function add(Request $request){
		//验证:两次密码是否一致 
		$uname=$request->input('uname');
		$pwd = $request->input('upwd');
		$repwd = $request->input('repwd');
		
		if($pwd != $repwd){
			return view('/Home/login/zhuce');
		}
		//获取插入的信息
		$user = $request->only(['uname','upwd']);
		
		
		//密码加密操作
		$user['upwd']=md5($user['upwd']);
		
		//将用户数据插入数据库
		$result = DB::table('user')->insert($user);
		
		//通过用户名获取用户id 进行占位
		$uid=DB::table('user')->where('uname','=',$uname)->first();
		
		//将uid插入用户详情表
		$rtime=date('Y-m-d H:i:s');
		DB::table('userinfo')->insert(['uid'=>$uid['uid'],'rtime'=>$rtime]);
		//判断用户是否插入成功
		if($result){
			return  view('/Home/oppozhu/index');
			//return success('','注册用户成功',1);
		}else{
			//return error('','注册用户失败',3);
			return  view('/Home/login/zhuce');
		}
		 
	}
	
	
	 //退出登录方法
	public function logout(Request $request){
		//清除session信息
		$request->session()->flush();
		//跳转页面
		return redirect('/');
	}
	
	
	 
	
	//找回密码操作
	public function zhao(Request $request){
		//判断是否存在此用户
		$uname=$request->input('uname');
		$re=DB::table('user')
						->where('uname','=',$uname)->first();
		if(empty($re)){
			return false;
		}

		//验证:两次密码是否一致 
		$pwd = $request->input('upwd');
		$repwd = $request->input('repwd');
		
		if($pwd != $repwd){
			//提示两次密码不一致
			echo '两次密码不一致';
		}
		//密码加密操作
		$user['upwd']=md5($pwd);
		//匹配用户详细信息
		$uemail=$request->input('uemail');
		$utel=$request->input('utel');
		$req=DB::table('userinfo')
						->where('uemail','=',$uemail)
						->where('utel','=',$utel)
						->first();
		if(empty($req)){
			return false;
		}				
		//将用户数据插入数据库
		$result = DB::table('user')->update($user);
		
		//判断用户是否插入成功
		if($result){
			return  view('/Home/login/login');
			//return success('','注册用户成功',1);
		}else{
			//return error('','注册用户失败',3);
			return  view('/Home/login/zhuce');
		}
		 
	}
	//个人详细信息
	public function info(Request $request){
		//获取数据
		$uid=$request->session()->get('uid');
		$result=DB::table('userinfo')
					->join('user','user.uid','=','userinfo.uid')
					->where('user.uid','=',$uid)
					->first();
					//var_dump($result);
		return view('Home/login/userinfo',['result'=>$result]);
	}
     
	 
	 //个人信息修改
	 public function infoupdate(Request $request){
		 //获取表单信息
		 $uid=$request->session()->get('uid');
		 $uname=$request->input('uname');
		 $sename=$request->session()->get('uname');
		 $info=$request->only('uname','utel','uemail');
		 //在数据库中更新数据
		 $re=DB::table('userinfo')
						->join('user','user.uid','=','userinfo.uid')
						->where('userinfo.uid','=',$uid)
						->update($info);
		 $result=DB::table('userinfo')
						->join('user','user.uid','=','userinfo.uid')
						->where('userinfo.uid','=',$uid)
						->first();
			if($uname!=$sename){
				return view('Home/login/login');
			}else{
				 if($re){
					//成功返回上一页并且重新加载页面
					//return redirect('/myOrder',['re'=>$re]);
					return view('Home/login/userinfo',['result'=>$result]);
				 }else{
					return view('Home/login/userinfo',['result'=>$result]);
				 }
		 
			}			
		
	 }
		
		//更换个人头像操作
		public function faceupdate(Request $request){
			//检测是否有上传文件
			if (!$request->hasFile('uface')) {
				return error('/userinfo','对不起,没有文件被上传,亲供选择上传文件',3);
				 
			}
			
			//生成文件夹
			$dir = 'uface';
			//生成文件名
			$uid=$request->session()->get('uid');
			$fileName = $uid.'.jpg';
			//组合上传路径存储到数据库中
			 
			//移动上传文件
			$request->file('uface')->move($dir, $fileName);
			//图像路径
			$uface='/'.$dir.'/'.$fileName;
			$uid = $request->session()->get('uid');
			$user['uface']=$uface;
			 //在数据库中更新数据
			$re=DB::table('userinfo')
						->where('uid','=',$uid)
						->update($user);
					return redirect('/userinfo');
					 
	 }
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
}
