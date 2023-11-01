<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pay(Request $request)
    {
        //order_id  订单ID
            $order_id = $request->input('order_id');
        //info      订单简介        在数据库中通过order_id查询获得
            $info = '购买商品';
        //price     订单总价        通过数据库中的对应商品ID的 再从商品详情中获得
        //                          或者通过订单确认直接获得
             
            $result = DB::table('order')
            			->select('totalprice')
            			->where('order_id','=',$order_id)
            			->first();
           	$price = $result['totalprice'];
        //rurl      返回地址        订单详情页
            $rurl = 'http://www.tb.com/order_all';
        //seller    收款人邮箱      卖家邮箱
            $seller = '1228570078@qq.com';
        //组合地址
            $url = 'http://pay.xiaohigh.com/api/deal?to='.$seller.'&money='.$price.'&order_id='.$order_id.'&info='.$info.'&return_url='.$rurl;
        

            return redirect($url); 
    }


}
