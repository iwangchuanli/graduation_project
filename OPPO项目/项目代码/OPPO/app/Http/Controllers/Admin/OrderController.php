<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
	
	//添加订单页面
	public function add(){
		return view('Admin.Order.add');
	}
	
	//添加订单操作
	public function insert(Request $request){
		$name = $request->input('name');
		$address = $request->input('address');
		$utel = $request->input('utel');
		$uemail = $request->input('uemail');
		$oprice = $request->input('oprice');
		$onum = $request->input('onum');
		$gid = $request->input('gid');
		$uid = $request->input('uid');
		
		//下单时间
		$date = date('Y-m-d H:i:s');
		
		//生成订单号
		$orderNum = date('Ymd').str_pad(mt_rand(1,99999), 6, '0', STR_PAD_LEFT);
		//插入地址操作
		$aid = DB::table('address')->insertGetId(['uid'=>$uid,'name'=>$name,'utel'=>$utel,'address'=>$address,'uemail'=>$uemail]);
		
		$result = DB::table('order')->insert(['gid'=>$gid,'aid'=>$aid,'uid'=>$uid,'obh'=>$orderNum,'otime'=>$date,'oprice'=>$oprice,'onum'=>$onum]);
		 
		if($result){
			return redirect('/admin/order/list');
		}else{
			return '插入失败';
		}
	
	}

	//显示订单列表
    public function index(){
		//查询所有订单
		$orders = DB::table('order')
			->join('user','order.uid','=','user.uid')
			->join('goods','order.gid','=','goods.gid')
			->paginate(10);
		if(!empty($orders)){
			return view('Admin.Order.list',['orders'=>$orders]);
		}else{
			return view('Admin.Order.undex');
		}
		
    }
	
	//当前页面查找操作
	public function find(Request $request){
		$key = $request->input('keywords');
		$result = DB::table('order')
				->where('uid','=',$key)
				->orwhere('oid','=',$key)
				->orwhere('obh','=',$key)
				->join('goods','order.gid','=','goods.gid')
				->orWhere('goods.gid','=',$key)
				->paginate(10);
		if($result){
			return view('Admin.Order.list',['orders'=>$result]);
		}else{
			return '查询错误';
		}
	}
	
	//查找订单操作
	public function finds(Request $request){
		//接受传参数据
		$key = $request->input('keywords');
		$result = DB::table('order')
				->where('uid','=',$key)
				->orwhere('oid','=',$key)
				->orwhere('obh','=',$key)
				->join('goods','order.gid','=','goods.gid')
				->orWhere('goods.gid','=',$key)
				->paginate(10);
		if($result){
			return view('Admin.Order.list',['orders'=>$result]);
		}else{
			return '查询错误';
		}
	}
	
	
	//更改订单操作
	
	
	//发货操作
	public function send(Request $request){
		$oid= $request->input('oid');
		//$ostatus = '已发货';
		//更改数据库操作
		$res = DB::table('order')
				->where('oid','=',$oid)
				->update(['send' => '已发货']);
		if($res){
			echo 1;
		}else{
			echo 0;
		}
	}
	
	//ajax请求获取  
	
	public function modify(Request $request){
		 $oid = $request->input('oid');
		 
		 $result = DB::table('order')
					->join('address','order.aid','=','address.aid')
					->where('order.oid','=',$oid)
					->first();
		return response()->json($result);
		
		 
	}
	
	//修改订单操作
	public function update(Request $request){
		//接受表单数据
		$name = $request->input('name');
		$address = $request->input('address');
		$utel = $request->input('utel');
		$gid = $request->input('gid');
		$oprice = $request->input('oprice');
		$onum = $request->input('onum');
		$oid = $request->input('oid');
		
		//连接数据库 进行更改操作
		$result = DB::table('order')
				->join('address','order.aid','=','address.aid')
				->where('order.oid','=',$oid)
				->update(['address.name'=>$name,'address.address'=>$address,'address.utel'=>$utel,'order.gid'=>$gid,'order.oprice'=>$oprice,'order.onum'=>$onum]);
		if($result){
			return redirect('/admin/order/list');
		}
	}

	
	//删除订单操作
	public function delete(Request $request){
		//删除数据操作
		$oid = $request->input('oid');
		$result = DB::table('order')
				->where('oid','=',$oid)
				->delete();
		if($result){
			echo 1;
		}else{
			echo 0;
		}
	}
    
    //查找订单界面
    public function search(){
        return view('Admin.Order.search');
    }
	
	//订单详情界面
	public function info(Request $request){
		//接收请求传参
		$oid = $request->input('oid');
		$uid = $request->input('uid');
		
		//查询数据库操作
		$result = DB::table('order')
			->join('goods','order.gid','=','goods.gid')
			->join('address','order.aid','=','address.aid')
			->where('order.uid','=',$uid)
			->where('order.oid','=',$oid)
			->first();
		if($result){
			return view('Admin.Order.info',['orders'=>$result]);
		}else{
			return '查看失败,稍后重试';
		}
	}
}
