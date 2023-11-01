<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class cartController extends Controller
{
        //插入购物车信息
        public function tupdate(Request $request){
            $uid = $request->session()->get('uid');
            //接收id
            $cart=$request->only('gid','skustr','skuprice');
            $cart['uid'] = $uid;
            //$cart['uid']=$uid;
            //插入数据库
            $result=DB::table('cart')->insert($cart);
            if($result){
                    //添加成功 返回商品列表
                    echo 1;
                }else{
                    //添加商品失败
                    echo 0;
                }
        }
        //访问购物车方法
        public function cart(){
        //显示购物车
        $cart=DB::table('cart')
        				->join('users','cart.uid','=','users.uid')
                        ->join('picture','cart.gid','=','picture.gid')
        				->join('goods','cart.gid','=','goods.gid')
                        //->join('sku','cart.gid','=','sku.gid')
        				->select('users.*', 'goods.*','cart.*','picture.*')
        				->get();
                        //dd($cart);
        return view('home/cart',['cart'=>$cart]);

    }

    //删除购物车
    public function delete(Request $request){
        //接收id
        $caid=$request->input('caid');
        
        //删除操作
        $result=DB::table('cart')->where('caid','=',$caid)->delete();
        if($result){//删除成功 返回1
            echo 1;
        }else{//删除失败 返回0
            echo 0;
        }
    }

    //减少商品操作
    public function xupdate(Request $request){
        //接收id
        $caid=$request->input('caid');
        //减少操作
        $result=DB::table('cart')->where('caid','=',$caid)->decrement('gnum');
        if($result){//成功 返回1
            echo 1;
        }else{//失败 返回0
            echo 0;
        }
    }

    //增加商品操作
    public function supdate(Request $request){
        //接收id
        $caid=$request->input('caid');
        //增加操作
        $result=DB::table('cart')->where('caid','=',$caid)->increment('gnum');
        if($result){//成功 返回1
            echo 1;
        }else{//失败 返回0
            echo 0;
        }
    }

}
