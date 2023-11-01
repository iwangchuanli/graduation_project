<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AttValueController extends Controller
{	
	//添加属性值操作
    public function insert(Request $request){
		$attvalue=$request->except('_token');
		$atvname=$request->input('atvname');
		$atvnameArr=DB::table('attvalue')->lists('atvname');
		if(in_array($atvname,$atvnameArr)){
			return error('/admin/attname/index','该属性值已经存在',3);
		}
		$result = DB::table('attvalue')->insert($attvalue);
		return redirect('admin/attname/index');
	}
	//查看属性名对应属性值界面
	public function nvindex(Request $request){
		$atnid=$request->input('atnid');
		$attvalue=DB::table('attvalue')->where('atnid','=',$atnid)->get();
		return view('admin/attname/vindex',['attvalue'=>$attvalue]);
	}
	//删除属性值
	public function delete(Request $request){
		$atvid = $request->input('atvid');
		$result = DB::table('attvalue')->where('atvid','=',$atvid)->delete();
		if($result){
			echo 1;
		}else{
			echo 0;
		}
	}
	//所有属性值界面  无用
	public function vindex(){
		$attvalue=DB::table('attvalue')->get();
		return view('admin/attname/vindex',['attvalue'=>$attvalue]);
	}
	
}
