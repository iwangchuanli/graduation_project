<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LinkController extends Controller
{
    //显示友情链接列表
    public function index(){
        //查询所有友情链接信息
		$result=DB::table('flink')->get();
        return view('Admin.Link.list',['result'=>$result]);
    }
	//友情链接的更新操作
	public function update(Request $request){
		$result=$request->only('fname','furl','fnumber');
		$fid = $request->input('fid');		
		$result = DB::table('flink')->where('fid','=',$fid)->update($result);		
		//判断执行结果
		if($result){
			return success('/admin/link/list','更新友情链接成功',1);
		}else{
			return error('/admin/link/list','更新友情链接失败',1);
		}
    }
	public function delete(Request $request){
		//接收友情链接id
		$fid = $request->input('fid');
		//删除操作
		$result = DB::table('flink')->where('fid','=',$fid)->delete();

		if($result){//删除成功 返回1
			echo 1;
		}else{//删除失败 返回0
			echo 0;
		}
	}
	//友情链接pencil操作
	public function pencil(Request $request){
		//获取友情链接fid
		$fid = $request->input('fid');
		//查询用户信息
		$result = DB::table('flink')->where('fid','=',$fid)->first();		
		//json编码后返回
		return response()->json($result);
	}
    //添加友情链接界面
    public function add(){
        return view('Admin.Link.add');
    }
	//在添加友情链接界面添加操作
	public function insert(Request $request){
		$result = $request->only(['fname','furl','fnumber']);
				//将用户数据插入数据库
		$result = DB::table('flink')->insert($result);
		
		//判断用户是否插入成功
		if($result){
			return success('/admin/link/add','添加友情链接操作成功',1);
		}else{
			return error('/admin/link/add','添加友情链接操作失败',1);
		}
	}
    //查找友情链接界面
		public function search(Request $request){
		//接收关键字
		$keywords = $request->input('key');
		
		$result=DB::table('flink')
						->where('fid','=',$keywords)
						->orWhere('fname','like','%'.$keywords.'%')
						->orWhere('furl','like','%'.$keywords.'%')
						->orWhere('fnumber','like','%'.$keywords.'%')
						->get();
						
		//将查找友情链接分配到模板中显示
		return view('Admin.link.list',['result'=>$result]);
	}

}
