<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
	//提交订单界面
    public function pay_address(Request $request){
		$uid=$request->session()->get('uid');
		$skustr=$request->input('skustr');
		$orderbase=$request->except('_token');
		//通过skustr查询sku
		$skuinfo=DB::table('sku')->where('skustr','=',$skustr)->first();
		//通过session uid查询地址
		$address=DB::table('address')->where('uid','=',$uid)->orderBy('def','desc')->get();
		return view('order.pay_address',['skuinfo'=>$skuinfo,'orderbase'=>$orderbase,'address'=>$address,'uid'=>$uid]);
    }
	//提交订单操作
	public function paya(Request $request){
		$aid=$request->input('aid');
		$uid=$request->session()->get('uid');
		$listprice=$request->input('listprice');
		$count=$request->input('count');
		$totalprice=$request->input('totalprice');
		$skuid=$request->input('skuid');
		$gid=$request->input('gid');
		$status=0;
		$ordertime=time();
		$order_id = DB::table('order')->insertGetId(['aid'=>$aid,'uid'=>$uid,'listprice'=>$listprice,'count'=>$count,'totalprice'=>$totalprice,'skuid'=>$skuid,'gid'=>$gid,'status'=>$status,'ordertime'=>$ordertime]);
		if($order_id){
			echo $order_id;
		}else{
			echo 0;
		}
	}
	public function order_wait_payment(Request $request){
		$uid=$request->session()->get('uid');
		$worder=DB::table('order')->where('uid','=',$uid)->get();
		return view('order.order_wait_payment',['worder'=>$worder]);
	}
	//所有订单界面
	public function order_all(Request $request){
		$uid=$request->session()->get('uid');
		$worder=DB::table('order')->where('uid','=',$uid)->get();
		$status = $request->input('status')?1:0;
		$order_id = $request->input('order_id')?$request->input('order_id'):0;
		$result = DB::table('order')
				->where('order_id','=',$order_id)
				->update(['status'=>$status]);
		return view('order.order_all',['worder'=>$worder]);
	}
}
