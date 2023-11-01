<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class GoodsclassController extends Controller
{
	//添加子类界面
    public function sadd(){
		$pclass = DB::table('goodsclass')->where('ispclass','=','1')->get();
		return view('admin.goodsclass.sadd',['pclass'=>$pclass]);
	}
	//添加父类界面
	 public function padd(){
		return view('admin.goodsclass.padd');
	}
	//添加子类操作
	public function insert(Request $request){
		$pclass = $request->input('ispclass');
		if($pclass){
			$classinfo['ispclass']=0;
			$classinfo['pcid']=$request->input('ispclass');
			$classinfo['gcname']=$request->input('gcname');
		}else{
			$classinfo['ispclass']=1;
			$classinfo['pcid']=0;
			$classinfo['gcname']=$request->input('gcname');
		}
		$result = DB::table('goodsclass')->insert($classinfo);
		if($result){
			return success('/admin/goodsclass/index','添加类别成功','2');
		}else{
			return error('admin/goodsclass/index','还能添加失败?自己再去添加','3');
		}
		
	}
	
	public function index(){
		
		return view('admin.goodsclass.index');
	}
	
	
}
