<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class GoodsClassController extends Controller
{
    //添加类别界面
    public function add(){
		$pclass = DB::table('goodsclass')->where('ispclass','=','1')->get();
		return view('admin.goodsclass.add',['pclass'=>$pclass]);
	}
	//添加子类操作
	public function insert(Request $request){
		$ispclass = $request->input('gender');
		if($ispclass){
			$classinfo['ispclass']=1;
			$classinfo['pcid']=0;
			$classinfo['gcname']=$request->input('gcname');
		}else{
			$classinfo['ispclass']=0;
			$classinfo['pcid']=$request->input('pcid');
			$classinfo['gcname']=$request->input('gcname');
		}
		
		$result = DB::table('goodsclass')->insert($classinfo);
		if($result){
			return success('/admin/goodsclass/index','添加类别成功','2');
		}else{
			return error('/admin/goodsclass/add','还能添加失败?自己再去添加','3');
		}
		
	}
	//查看类别界面
	public function index(){
		$goodsclass=DB::table('goodsclass')->where('ispclass','=',1)->get();
		return view('admin.goodsclass.index',['goodsclass'=>$goodsclass]);
	}
	//获取子类界面
	public function getsclass(Request $request){
		//获取父类id
		$pcid = $request->input('pcid');
		//查询其对应子类
		$goodsclass = DB::table('goodsclass')->where('pcid','=',$pcid)->get();
		return view('admin.goodsclass.index',['goodsclass'=>$goodsclass]);
		
	}
	//查询所有子类
	public function scindex(Request $request){
		$goodsclass = DB::table('goodsclass')->where('ispclass','=',0)->get();
		return view('admin.goodsclass.index',['goodsclass'=>$goodsclass]);
		
	}
	//修改分类(名)界面
	public function modify(Request $request){
		$gcid = $request->input('gcid');
		$gclass = DB::table('goodsclass')->where('gcid','=',$gcid)->first();
		return response()->json($gclass);
	}
	//修改分类(名)操作
	public function update(Request $request){
		$classinfo = $request->only('gcid','gcname');
		$gcid =$request->input('gcid');
		$result = DB::table('goodsclass')->where('gcid','=',$gcid)->update($classinfo);
		if($result){
			return success('/admin/goodsclass/index','修改分类成功',1);
		}else{
			return error('/admin/goodsclass/index','修改分类失败',3);
		}
	}
	//删除分类操作
	public function delete(Request $request){
		$gcid = $request->input('gcid');
		$result = DB::table('goodsclass')
						->where('gcid','=',$gcid)
						->orWhere('pcid','=',$gcid)
						->delete();
		if($result){
			echo 1;
		}else{
			echo 0;
		}
	}
	
}
