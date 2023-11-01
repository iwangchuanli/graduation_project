<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //显示用户列表
	public function index(){
		//查询所有的用户信息
		$users = DB::table('users')->get();
		return view('admin.user.index',['users'=>$users]);
	}
	//添加用户界面
	public function add(){
		return view('admin.user.add');
	}
	//添加用户操作
	public function insert(Request $request){
		//验证两次密码是否一致
		$upwd = $request->input('upwd');
		$repwd = $request->input('repwd');
		if($upwd != $repwd){
			return error('/admin/user/add/','两次密码不一致',3);
		}
		$uname = $request->input('uname');
		$unameArr = DB::table('users')->lists('uname');
		if(in_array($uname,$unameArr)){
			return error('/admin/user/add/','用户名重复',3);
		};
		$users = $request->except(['_token','repwd']);
		//var_dump($users);
		$users['upwd']=md5($users['upwd']);
		$users['addtime']=time();
		//将用户数据插入数据库
		$result = DB::table('users')->insert($users);
		//判断用户是否插入成功上
		if($result){
			return success('/admin/user/index/','插入用户成功',1);
		}else{
			return error('/admin/user/add/','插入用户失败',3);
		}
		
	}
	//删除用户操作
	public function delete(Request $request){
		$uid = $request->input('uid');
		$result=DB::table('users')->where('uid','=',$uid)->delete();
		//dd($uid);
		if($result){
			echo 1;
		}else{
			echo 0;
		}
	}
	//更新用户方法
	public function modify(Request $request){
		//获取用户id
		$uid = $request->input('uid');
		//查询用户信息
		$user=DB::table('users')->where('uid','=',$uid)->first();
		
		//json编码后返回
		return response()->json($user);
	}
	//更新用户操作
	public function update(Request $request){
		//检测是否需要修改密码
		if(!empty($request->input('upwd'))){
			//接受表单传参 更新到数据库
			$user=$request->only('uname','uemail','upwd','uphone','isAdmin');

			$user['upwd'] = md5($user['upwd']);
		}else{
			//接受表单传参 更新到数据库
			$user=$request->only('uname','uemail','uphone','isAdmin');
			
		}
		$uid=$request->input('uid');
		$result = DB::table('users')->where('uid','=',$uid)->update($user);
		if($result){
			return success('/admin/user/index','更新用户信息成功',1);
		}else{
			return error('/admin/user/index','更新用户信息失败',3);
		}
	}
	//查找用户界面
	public function find(Request $request){
		return view('/admin/user/find');
	}
	//查找用户结果界面
	public function search(Request $request){
		$keywords = $request->input('key');
		$allUser=DB::table('users')
					->where('uid','=',$keywords)
					->orwhere('uname','like',$keywords)
					->orwhere('uemail','like',$keywords)
					->orwhere('uphone','like',$keywords)
					->get();
		return view('admin.user.index',['users'=>$allUser]);
	}
	
}
