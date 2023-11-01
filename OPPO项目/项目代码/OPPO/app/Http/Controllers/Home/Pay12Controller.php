<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PayController extends Controller
{
	//支付操作
	public function alipay(Request $request){
		$oid = $request->input('oid');
		$obh = $request->input('obh');	
		$oprice = $request->input('oprice');	
		$uid = $request->input('uid');

		//假设支付成功跳转页面操作
		$pay = DB::table('pay')->insert(['uid'=>$uid,'alipay'=>$oprice,'obh'=>$obh]);
		$order = DB::table('order')->where('oid','=',$oid)->update(['ostatus'=>'已支付']);
		
		 //dd($oid);
		if($pay && $order){
			return redirect('/orderXq?oid='.$oid);
		}
	}
}
