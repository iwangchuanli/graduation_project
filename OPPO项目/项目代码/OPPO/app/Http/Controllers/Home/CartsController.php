<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
class CartsController extends Controller
{
   //用户添加购物车操作
   public function add(Request $request){
	   $uid = $request->Session()->get('uid');
	   $gid = $request->input('gid');
	   $num = $request->input('num');
	   
	   //查询购物车数据库中所有所属uid的商品
	   $shopcar = DB::table('shopcar')->where('uid','=',$uid)->first();
	   
	   //检测用户是否已经将商品添加到购物车
	   if($shopcar['gid'] == $gid){
		   //执行加yi操作
		   $carts = DB::table('shopcar')->where('uid','=',$uid)->where('gid','=',$gid)->increment('num',1);
	   }else{
		    //添加购物车到数据库
		   $carts=DB::table('shopcar')->insert(['gid'=>$gid,'uid'=>$uid,'num'=>$num]);
	   }
	   
	   if($carts == 1){
		   echo 1;
	   }else{
		   echo 0;
	   }
   }
   
   //展示购物车页面
   public function index(Request $request){
	   //查询数据库操作
		$uid = $request->Session()->get('uid');
	   $carts = DB::table('shopcar')
				->join('goods','shopcar.gid','=','goods.gid')
				->where('shopcar.uid','=',$uid)
				->get();
			if($carts){
				return view('Home.shop.shopCar',['cart'=>$carts]);
			}
   }
   
   //删除购物车操作
   public function drop(Request $request){
	   //接受ajax传参
	   $cid = $request->input('cid');
	   //删除数据库操作
	   $result = DB::table('shopcar')
			->where('cid','=',$cid)
			->delete();
		if($result){
			echo 1;
		}else{
			echo 0;
		}
   }
   
    //立即购买操作
   public function panduan(Request $request){
		$uid = Session::get('uid');
	   $num = $request->input('cnumber');
	   $gid = $request->input('gid');
	   $allprice = $request->input('price');
	   //插入数据库
	   $t=DB::table('shopcar')->insertGetId(['uid'=>$uid,'num'=>$num,'gid'=>$gid]);
	   if($t){
		   return redirect('/fillOrder?svn='.$t.'&total='.$allprice);
	   }else{
		   return false;
	   }
   }
   
   //准备购买操作
   public function begin(Request $request){
	   $gid = $request->input('gid');
	   $num = $request->input('cnumber');
	   $uid = Session::get('uid');
	    
	   //查询购物车数据库中所有所属uid的商品
	   $shopcar = DB::table('shopcar')->where('gid','=',$gid)->first();
	    
	   //检测用户是否已经将商品添加到购物车
	   if($shopcar){
		   //执行加yi操作
		   $count = DB::table('shopcar')->where('uid','=',$uid)->where('gid','=',$gid)->increment('num',1);
		   
		   //限制每个用户单次购买不许超过10个商品
		   if($shopcar['num'] > 9){
			   return '商品单次购买上限为10，请重新选择购买数量';
		   }
		   return redirect('/fillOrder?svn='.$shopcar['cid']);
	   }else{
		    //添加购物车到数据库
		   $cid=DB::table('shopcar')->insertGetId(['gid'=>$gid,'uid'=>$uid,'num'=>$num]);
		   return redirect('/fillOrder?svn='.$cid);
	   }
   }
   
   //修改购物车操作（+）
   public function addNum(Request $request){
	   $cid = $request->input('cid');
	   //更改数据库
	   $add = DB::table('shopcar')->where('cid','=',$cid)->increment('num',1);
	   $result = DB::table('shopcar')
					->join('goods','shopcar.gid','=','goods.gid')
					->where('shopcar.cid','=',$cid)
					->first();
	 
		return response()->json($result);
   }
   
   //修改购物车操作（-）
   public function jianNum(Request $request){
	   $cid = $request->input('cid');
	   $res = DB::table('shopcar')->where('cid','=',$cid)->first();
	   if($res['num'] == 1){
			return;
	   }else{
		   //更改数据库
		   $add = DB::table('shopcar')->where('cid','=',$cid)->decrement('num',1);
		   $result = DB::table('shopcar')->join('goods','shopcar.gid','=','goods.gid')
										->where('shopcar.cid','=',$cid)
										->first();
		   return response()->json($result);
	   }
   }
}
