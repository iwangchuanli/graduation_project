<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AttNameController extends Controller
{
	//添加商品属性名界面
    public function add(){
		$sclass = DB::table('goodsclass')->select('gcid','gcname','pcid')->where('ispclass','=',0)->get();
		foreach($sclass as $k=>$sc){
			$pcname = DB::table('goodsclass')->select('gcname')->where('gcid','=',$sc['pcid'])->first();
			$sclass[$k]['gcname'].='/'.$pcname['gcname'];
		}
		return view('admin/attname/add',['sclass'=>$sclass]);
	}
	//添加商品属性名操作
	public function insert(Request $request){
		$attname=$request->except(['_token','gcname']);
		$gcidarr=explode(',',$attname['gcid']);
		$attname['gcid']=$gcidarr[0];
		$attname['gcnamefix']=$gcidarr[1];
		$result=DB::table('attname')->insert($attname);
		if($result){
			return success('/admin/attname/index','添加属性成功',1);
		}else{
			return success('/admin/attname/add','添加属性失败',3);
		}
	}
	//商品属性名列表界面
	public function index(){
		$attname=DB::table('attname')->get();
		return view('admin/attname/index',['attname'=>$attname]);
	}
	
	//商品属性名删除并且删除其对应的属性值
	public function delete(Request $request){
		$atnid = $request->input('atnid');
		$result1=DB::table('attname')->where('atnid','=',$atnid)->delete();
		$result2=DB::table('attvalue')->where('atnid','=',$atnid)->delete();
		if($result1 && $result2){
			echo 1;
		}else{
			echo 0;
		}
		
		
		
	}
}
