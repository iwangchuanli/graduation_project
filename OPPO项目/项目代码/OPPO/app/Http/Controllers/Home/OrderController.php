<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
class OrderController extends Controller
{	
	
    //添加订单操作
	public function add(Request $request){
		$num = $request->input('num');
		$oprice = $request->input('oprice');
		$cid = $request->input('cid');
		$did = explode(',',$cid);
		array_pop($did);
		$date = date('Y-m-d H-i-s');
		
		//查询默认地址操作
		$aid = DB::table('address')->where('isdef','=',1)->first();

		foreach($did as $one){
			$orderNum = date('Ymd').str_pad(mt_rand(1,99999), 10, '0', STR_PAD_LEFT);
			$shopcar = DB::table('shopcar')->where('cid','=',$one)->first();
			//插入数据库操作
			$oid= DB::table('order')
				 ->insertGetId(['uid'=>$shopcar['uid'],'gid'=>$shopcar['gid'],'onum'=>$shopcar['num'],'otime'=>$date,'obh'=>$orderNum,'oprice'=>$oprice,'aid'=>$aid['aid']]);
			$del = DB::table('shopcar')->where('cid','=',$one)->delete();
			$arr[] = $oid;
		}
		$Orderid = join(",",$arr);

		//将数组序列化
		 if(true){
			return redirect('/pay?oid='.$Orderid);
		}else{
			return redirect('/shop/393');
		} 
		
		
	}
	
	//填写收货地址
	public function address(Request $request){
		//接收用户传参
		//总价格
		$allprice=$request->input('total');
		//echo $total;
		$cid = $request->input('svn');
		
		$did=explode(',',$cid);
		$a = count($did);
		if($a != 1){
			array_pop($did);
		}
	
		$uid = $request->Session()->get('uid');
		 
		 
		$arr = [];
		foreach($did as $one){
			$carts = DB::table('shopcar')
					->join('goods','shopcar.gid','=','goods.gid')
					->where('shopcar.cid','=',$one)
					->first();
			$arr[]=$carts;
		} 
		
		$sum = [];
		foreach($did as $demo){
			$total = DB::table('shopcar')
				->join('goods','shopcar.gid','=','goods.gid')
				->where('shopcar.cid','=',$demo)
				->sum('gprice');
			$sum[]=$total;
		}
		 
		 $num = [];
		foreach($did as $demo){
			$total = DB::table('shopcar')
				->where('cid','=',$demo)
				->sum('num');
			$num[]=$total;
		}
		
		$res = array_sum($sum);

		$result = array_sum($num);
		$he = ($result*$res);
	
		//查询用户地址操作
		$address = DB::table('address')->where('uid','=',$uid)->get();
		 
		if($address){
			return view('Home.shop.has',['cart'=>$arr,'address'=>$address,'cid'=>$cid,'num'=>$result,'oprice'=>$he,'allprice'=>$allprice]);
		}else{
			return view('Home.shop.fillOrder',['carts'=>$arr,'sum'=>$he]);
		}
		
	}
	 
	//更改收获地址操作
	public function update(Request $request){
		$aid = $request->input('aid');
		$uname = $request->input('unames');
		$utel = $request->input('utels');
		$uaddress = $request->input('uaddresss');
		$uemail = $request->input('uemails');
		//接受表单传参	
		//更新数据操作
		$result = DB::table('address')
				->where('aid','=',$aid)
				->update(['name'=>$uname,'utel'=>$utel,'address'=>$uaddress,'uemail'=>$uemail]);
		if($result){
			echo 1;
		}else{
			echo 0;
		}
		
		
		
	}
	
	//新增收货地址操作
	public function insert(Request $request){
		//接受用户传参
		$uid = 1;
		$uname = $request->input('uname');
		$utel = $request->input('utel');
		$uaddress = $request->input('uaddress');
		$uemail = $request->input('uemail');
		//插入数据库操作
		
		$aid = DB::table('address')->insert(['uid'=>$uid,'name'=>$uname,'utel'=>$utel,'address'=>$uaddress,'uemail'=>$uemail]);
		if($aid){
			//查询用户地址操作
			//$address = DB::table('address')->where('uid','=',$uid)->get();
		 
			//return view('Home/shop/has',['address'=>$address]);
			return redirect('address/index');
		}else{
			echo 'false';
		}
	}
	
	
	//has页面新增收货地址操作
	public function reinsert(Request $request){
		//接受用户传参
		$uid = 1;
		$uname = $request->input('uname');
		$utel = $request->input('utel');
		$uaddress = $request->input('uaddress');
		$uemail = $request->input('uemail');
		//插入数据库操作
		
		$aid = DB::table('address')->insert(['uid'=>$uid,'name'=>$uname,'utel'=>$utel,'address'=>$uaddress,'uemail'=>$uemail]);
		if($aid){
			echo 1;
		}else{
			echo 0;
		}
	}
	
	//删除订单操作
	public function delete(Request $request){
		$aid = $request->input('aid');
		$uid = 1;
		//删除数据库操作
		$del = DB::table('address')->where('aid','=',$aid)->delete();
		$find = DB::table('address')->where('uid','=',$uid)->get();
		if($del){
			if(!empty($find)){
				echo 1;
			}else{
				return redirect('/fillOrder?nimabi=250');
			}
			
		}else{
			echo 0;
		}
	}
	
	//显示地址列表
	public function index(){
		$uid = 1;
		$address = DB::table('address')->where('uid','=',$uid)->get();
		//查询购物车数据库操作
		$carts = DB::table('shopcar')
					->join('goods','shopcar.gid','=','goods.gid')
					->where('shopcar.cid','=',$cid)
					->orderBy('isdef','desc')
					->first();
		return view('Home/shop/has',['carts'=>$carts,'address'=>$address]);
	}
	
	//支付页面
	public function pay(Request $request){
		$oid = $request->input('oid');
		$did = explode(",",$oid);
			$arr = [];
			foreach($did as $one){
				//查询数据库操作
				$order = DB::table('order')
					->join('goods','order.gid','=','goods.gid')
					->join('address','order.aid','=','address.aid')
					->where('order.oid','=',$one)
					->first();
				$arr[] = $order;
			}
			
			$price = [];
			foreach($did as $one){
				//查询数据库操作
				$oprice = DB::table('order')
					->where('order.oid','=',$one)
					->sum('oprice');
				$price[] = $order;
			}
		if($arr && $price){
			return view('Home.shop.pay',['orders'=>$arr,'oid'=>$oid]);
		}
	}
 
	
	//订单详情页面
	public function info(Request $request){
		$oid = $request->input('oid');
		$did = explode(",",$oid);
		$arr = [];
		foreach($did as $one){
			$order = DB::table('order')
				->join('goods','order.gid','=','goods.gid')
				->join('address','order.aid','=','address.aid')
				->where('order.oid','=',$one)
				->first();
			$arr[] = $order;
		}
		
		if($arr){
			return view('Home.shop.orderXq',['orders'=>$arr]);
		}
	}
	
	//返回订单列表页面
	public function orders(Request $request){
		$uid =Session::get('uid');
	
		$order = DB::table('order')
				->join('goods','order.gid','=','goods.gid')
				->join('address','order.aid','=','address.aid')
				->where('order.uid','=',$uid)
				->Paginate(5);
		if(!empty($order)){
			return view('Home.shop.hasOrder',['order'=>$order]);
		}else{
			return view('Home.shop.myOrder');
		}
	}
	
	//地址设置为默认
	public function setdef(Request $request){
		$aid = $request->input('aid');
		//更改数据库操作
		$qx = DB::table('address')->where('isdef','=',1)->update(['isdef'=>0]);
		$def = DB::table('address')->where('aid','=',$aid)->update(['isdef'=>1]);
		if($qx && $def){
			echo 1;
		}else{
			echo 0; 
		}
	}
	
	//显示地址列表操作
	public function show(Request $request){
		$uid = $request->session()->get('uid');
		$address = DB::table('address')->where('uid','=',$uid)->get();
		if($address){
			return view('Home.shop.address',['address'=>$address]);
		}else{
			return view('Home.shop.addressAdd');
		}
	}
}
