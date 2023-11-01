<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ShopcarController extends Controller
{
	//后台购物车列表
	public function index(){
		//数据库查询操作
		$carts = DB::table('shopcar')
			->join('goods','shopcar.gid','=','goods.gid')
			->get();
	
		if(!empty($carts)){
			return view('Admin.Shopcar.index',['carts'=>$carts]);
		}else{
			return view('Admin.Shopcar.undex');
		}
		
	}
	
	//后台购物车删除操作
	public function delete(Request $request){
		$cid = $request->input('cid');
		//操作数据库
		$result = DB::table('shopcar')
					->where('cid','=',$cid)
					->delete();
		if($result){
			echo 1;
		}else{
			echo 0;
		}
	}
}
