<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PayController extends Controller
{	
	//支付列表
	public function payinfo(){
		//显示已经支付的支付俩表
		$result = DB::table('pay')->get();
		$price = DB::table('pay')->sum('alipay');
		if(!empty($result)){
			return view('Admin.Pay.pay',['payinfo'=>$result,'price'=>$price]);
		}else{
			return view('Admin.Pay.null');
		}
	
	}
	
	//支付详情
	public function detail(Request $request){
		//获取订单号
		$obh = $request->input('obh');
		$info = DB::table('order')
					->join('goods','order.gid','=','goods.gid')
					->where('order.obh','=',$obh)
					->first();
		if($info){
			return view('Admin.Pay.info',['info'=>$info]);
		}
	
	}
	
	//查找操作
	public function find(Request $request){
		//获取订单号
		$key = $request->input('keywords');
		$find = DB::table('pay')
					->where('obh','=',$key)
					->get();
		$price = DB::table('pay')->where('obh','=',$key)->sum('alipay');
		return view('Admin.Pay.pay',['payinfo'=>$find,'price'=>$price]);
	 
	
	}
}
