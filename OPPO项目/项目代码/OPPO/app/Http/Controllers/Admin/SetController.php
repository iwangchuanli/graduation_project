<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SetController extends Controller
{
	public function index(){
		$result=DB::table('config')
				->get();
		return view('Admin/Set/web',['result'=>$result]);
    }
	public function update(Request $request){
		$result=$request->only('netname','netkey','netbq','netkg');
		if($request->hasFile('netlogo')){
			$dir = 'upload/';
			//生成文件名
			$fileName = uniqid().'.jpg';
			//组合上传路径存储到数据库中
			
			//移动上传文件
			$request->file('netlogo')->move($dir, $fileName);
			$path='/'.$dir.$fileName;
			$result['netlogo'] = $path;
		}
		$result1=DB::table('config')
				->where('nid','=',1)
				->update($result);	
		return redirect('/admin/web');
    }
}
