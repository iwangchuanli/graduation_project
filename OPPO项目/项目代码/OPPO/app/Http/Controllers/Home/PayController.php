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
		$did = explode(",",$oid);
			$arr = [];
			foreach($did as $one){
				$orders = DB::table('order')->where('oid','=',$one)->first();
				//假设支付成功跳转页面操作
				$pay = DB::table('pay')->insert(['uid'=>$orders['uid'],'alipay'=>$orders['oprice'],'obh'=>$orders['obh']]);
				$order = DB::table('order')->where('oid','=',$one)->update(['ostatus'=>'已支付']);
				$arr[] = $pay;
			}
		
		if($arr){
			return redirect('/orderXq?oid='.$oid);
		}
	}
}
