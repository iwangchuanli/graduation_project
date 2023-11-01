<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
//引用对应的命名空间
use Gregwar\Captcha\CaptchaBuilder;
use Session;
 

class UserController extends Controller
{	
	/******************************************************************************/
	//用户登录界面
	public function login(){
		return view('login');
	} 
	
	//	用户头像获取
	public function userHead()
	{
		//	获得人员Id
		$id = Session::get('uid');
		
		$user = DB::table('userinfo') -> where('uid','=',$id) -> first();
		
		$path[1] = $user['uface'];
		
		return $path;
	}
	
	//生成验证码信息
	public function vcode(){
		//生成验证码图片的Builder对象 ，配置相应属性
		$builder=new CaptchaBuilder;
		//可以设置图片的宽度及字体
		$builder->build($width=80,$height=40,$font=null);
		//获取验证码的内容
		$phrase=$builder->getPhrase();
		//把内容存入session
		Session::flash('milkcaptcha',$phrase);
		//生成图片
		header("Cache-Control:no-cache,must-revalidate");
		header('Content-Type:image/jpeg');
		$builder->output();
	}
	
	
	//检测用户登录页面 只有管理员才可以登录
	public function checkLogin(Request $request){
		//验证验证码
		$userInput=\Request::get('captcha');
		if(Session::get('milkcaptcha')!=$userInput){
			//用户输入的验证码错误
			return  error('/admin','您输入的验证码错误',1);
		}
		
		 $uname=$request->input('uname');
		 $upwd=$request->input('upwd');
		 $upwd=md5($upwd);
		//查询用户信息
		$result=DB::table('user')
						->join('userinfo','user.uid','=','userinfo.uid')
						->select('user.uid','uname','uface','time','endtime','rid')
						->where('uname','=',$uname)
						->where('upwd','=',$upwd)
						->where('isadmin','=',1)
						->first();
		//获取现在时间
		$time=date('Y-m-d H:i:s');
		//将时间放入数据库
		DB::table('user')->where('uid','=',$result['uid'])->update(['time'=>$time]);
		//验证用户是否存在 并且用户名和密码是否正确
		if($result){
			//查询到用户
			//写入session信息
			$request->session()->put('isadmin',true);//登录标志
			//用户id
			$request->session()->put('uid',$result['uid']);
			//用户名
			$request->session()->put('uname',$result['uname']);
			$request->session()->put('uface',$result['uface']);
			$request->session()->put('rid',$result['rid']);
			
			//读取用户的所有角色对应的权限 写入session
			
			 
			//将字符串转换为数组
			$rolesArr = explode(',',$result['rid']);
			$allPower = DB::table('role')->select('pid')->whereIn('rid', $rolesArr)->get();
			 
			//权限数组合并成成一个数组
			$powerArr = [];
			$str = '';
			
			foreach($allPower as $one){
				$str .= $one['pid'].',';
				
			}
		
			//去掉最右侧的逗号
			$str=rtrim($str,',');
			
			//将权限字符串拆分成数组
			$powerArr = explode(',',$str);
			//将权限信息存储到session当中
			$request->session()->put('power',$powerArr);
			//dd($request->Session()->get('power'));
			 
			return view('/Admin/index',['result'=>$result]);
		}else{
			//return redirect('/admin');
			return error('/admin','对不起,不是管理员，没有权限登录',3);
		}
		
	}
	/******************************************************************************************/
	/*****************************************************************************************/
	//显示详情页面操作
	public function detail(Request $request){
		//获取传过来的id
		$uid=$request->input('uid');
		//查询数据库操作
		$users=DB::table('user')
				->join('userinfo','user.uid','=','userinfo.uid')
				->where('user.uid','=',$uid)
				->first();		
		//var_dump($users);
		if($users){
			return view('/Admin.User.detail',['users'=>$users]);
		}else{
			 
			return error('/admin/user/list','查询超时,稍后重试。。。',3);
		}
	}
	
	//更新用户信息操作
	public  function updateinfo(Request $request){
		//检测是否需要修改密码
		if(!empty($request->input('upwd'))){
			//接收表单传参  更新到数据库中即可  修改密码
			$user = $request->only('utel','points','vip','rtime','uemail','level');
			//MD5加密
			$user['upwd']=md5($user['upwd']);
		}else{
			//接收表单传参  更新到数据库中即可  不要修改密码
			$user = $request->only('utel','points','vip','rtime','uemail','level');
		}
		
		//检测是否有上传文件
		if (!$request->hasFile('uface')) {
			return error('/admin/user/list','对不起,没有文件被上传,亲供选择上传文件',3);
			//echo 'false';
		}
		
		//生成文件夹
		$dir = 'uface/';
		//生成文件名
		$uid=$request->input('uid');
		$fileName = $uid.'.jpg';
		//组合上传路径存储到数据库中
		 
		//移动上传文件
		$request->file('uface')->move($dir, $fileName);
		//图像路径
		$uface='/'.$dir.'/'.$fileName;
		$uid = $request->input('uid');
		$user['uface']=$uface;
		
		$re = DB::table('userinfo')->where('uid','=',$uid)->update($user);
		
		//判断执行结果
		if($re){
			return redirect('/admin/user/list');
			update();
		}else{
			//echo '更新失败';
			return error('/admin/user/list','对不起,更新失败',3);
			//return redirect('/admin/user/list');
		}	
		
	}
	
	 /*************************************************************************************/
    //显示用户列表
	
    public function index(){
    	//查询所有用户信息
    	$result=DB::table('user')->Paginate(5);
    	return view('Admin.User.list',['result'=>$result]);
    }

    //添加用户界面
    public function add(){
    	return view('Admin.User.add');
    }

    //添加用户操作
    public function insert(Request $request){
    	//验证:两次密码是否一致
    	$pwd = $request->input('upwd');
    	$repwd = $request->input('reupwd');
		$uname=$request->input('uname');
    	if($pwd != $repwd){
    		//return '两次密码不一致';
			return error('/admin/user/add','对不起,没有文件被上传,亲供选择上传文件',3);
    	}

    	//获取插入的信息
		$user = $request->only(['uname','upwd']);
		//密码加密操作
		$user['upwd']=md5($user['upwd']);
		
		//将用户数据插入数据库
		$result = DB::table('user')->insert($user);
		
		//将uid插入用户详情表
		//通过用户名获取用户id 进行占位
		$uid=DB::table('user')->where('uname','=',$uname)->first();
		 
		$rtime=date('Y-m-d H:i:s');
		DB::table('userinfo')->insert(['uid'=>$uid['uid'],'rtime'=>$rtime]);
		
		//判断用户是否插入成功
		if($result){
			return redirect('admin/user/list');
		}else{
			//return'插入用户失败';
			return error('/admin/user/list','插入用户失败',3);
		}
    }


    
	
	//删除用户操作
	public function delete(Request $request){
		//接收用户id
		$uid = $request->input('uid');
		 
		//删除操作
		$result = DB::table('user')->where('uid','=',$uid)->delete();
		//删除的同时将userinfo里的用户信息删除
		DB::table('userinfo')->where('uid','=',$uid)->delete();
		if($result){//删除成功 返回1
			return 1;
		}else{
			//删除失败 返回0
			return 0;
		}
	}
	
	//更新用户 方法
	 public function modify(Request $request){
		//获取用户id
		$uid = $request->input('uid');
		//查询用户信息
		$user = DB::table('user')->where('uid','=',$uid)->first();
		
		//json编码后返回
		return response()->json($user);
	}
	
	
	//更新用户操作
	public  function update(Request $request){
		//检测是否需要修改密码
		if(!empty($request->input('upwd'))){
			//接收表单传参  更新到数据库中即可  修改密码
			$user = $request->only('uname','upwd');
			//MD5加密
			$user['upwd']=md5($user['upwd']);
		}else{
			//接收表单传参  更新到数据库中即可  不要修改密码
			$user = $request->only('uname','uid');
		}
		
		
		$uid = $request->input('uid');
		
		$re = DB::table('user')->where('uid','=',$uid)->update($user);
		
		//判断执行结果
		if($re){
			$result=DB::table('user')->get();
			return redirect('/admin/user/list');
		}else{
			//echo '更新失败';
			//return redirect('/admin/user/list');
			return error('/admin/user/list','插入用户失败',3);
		}	
		
	}
	
	
	//查找用户界面
	public function search(){
		return view('Admin.User.search');
	}
	
	 
	
	//查找用户界面
	public function find(Request $request){
		//接收关键字
		$keywords = $request->input('uname');
		
		$allUser=DB::table('user')
						->where('uid','=',$keywords)
						->orWhere('uname','like','%'.$keywords.'%')
						->Paginate(5);
		 
		if($allUser){
			//将查找用户分配到模板中显示
			return  view('Admin/User/list',['result'=>$allUser]);
		}else{
			 
			return error('/admin/user/list','不存在 ',3);
		}
		
	}
/********************************************************************************************************/
/********************************************************************************************************/	
	//管理员管理界面
	public function  admin(){
		$allAdmin=DB::table('user')->where('isadmin','=',1)->Paginate(5);
		if($allAdmin){
			//返回是都是管理员的界面
			return view('Admin/User/admin',['result'=>$allAdmin]);
		}else{
			//return '不存在';
			return error('/Admin/User/admin','插入用户失败',3);
		}
	}
	
	//更新管理员操作
	public  function adminupdate(Request $request){
		//检测是否需要修改密码
		if(!empty($request->input('upwd'))){
			//接收表单传参  更新到数据库中即可  修改密码
			$user = $request->only('uname','upwd');
			//MD5加密
			$user['upwd']=md5($user['upwd']);
		}else{
			//接收表单传参  更新到数据库中即可  不要修改密码
			$user = $request->only('uname','uid');
		}
		
		
		$uid = $request->input('uid');
		
		$re = DB::table('user')->where('uid','=',$uid)->update($user);
		
		//判断执行结果
		if($re){
			$result=DB::table('user')->get();
			return redirect('/admin/user/admin');
		}else{
			//echo '';
			return error('/admin/user/admin',' 更新失败 ',3);
			//return redirect('/admin/user/admin');
		}	
		
	}
	
	//删除管理员操作
	public function admindelete(Request $request){
		//接收用户id
		$uid = $request->input('uid');
		 
		//删除操作
		$result = DB::table('user')->where('uid','=',$uid)->delete();
		
		//删除的同时将userinfo里的用户信息删除
		DB::table('userinfo')->where('uid','=',$uid)->delete();
		
		if($result){//删除成功 返回1
			return 1;
		}else{
			//删除失败 返回0
			return 0;
		}
	}
	
	
	//查找管理员界面
	public function adminfind(Request $request){
		//接收关键字
		$keywords = $request->input('uname');
		
		$allUser=DB::table('user')
						->where('isadmin','=',1)
						->Where('uname','like','%'.$keywords.'%')
						->orwhere('uid','=',$keywords)
						->Paginate(5);
		 
		if($allUser){
			//将查找用户分配到模板中显示
			return  view('Admin/User/admin',['result'=>$allUser]);
		}else{
			//return '';
			return error('/Admin/User/admin','不存在 ',3);
		}
		
	}
	
	//添加管理员界面
    public function adminadd(){
    	return view('Admin.User.adminadd');
    }
	
	//添加管理员操作
    public function admininsert(Request $request){
    	//验证:两次密码是否一致
    	$pwd = $request->input('upwd');
    	$repwd = $request->input('reupwd');
		$uname=$request->input('uname');
    	if($pwd != $repwd){
    		return '两次密码不一致';
    	}

    	//获取插入的信息
		$user = $request->only(['uname','upwd','isadmin']);
		//密码加密操作
		$user['upwd']=md5($user['upwd']);
		
		//将用户数据插入数据库
		$result = DB::table('user')->insert($user);
		
		//将uid插入用户详情表
		//通过用户名获取用户id 进行占位
		$uid=DB::table('user')->where('uname','=',$uname)->first();
		 
		$rtime=date('Y-m-d H:i:s');
		DB::table('userinfo')->insert(['uid'=>$uid['uid'],'rtime'=>$rtime]);
		
		//判断用户是否插入成功
		if($result){
			return redirect('admin/user/admin');
		}else{
			//return'插入用户失败';
			return error('/admin/user/admin','插入用户失败',3);
		}
    }
	/****************************************************************************************/
	//退出登录方法
	public function logout(Request $request){
		//清除session信息
		$uid=$request->Session()->get('uid');
		//获取现在时间
		$time=date('Y-m-d H:i:s');
		//将时间放入数据库
		DB::table('user')->where('uid','=',$uid)->update(['endtime'=>$time]);
		$request->session()->flush();
		//跳转页面
		return redirect('/admin');
	}
	
	
	
	
}
