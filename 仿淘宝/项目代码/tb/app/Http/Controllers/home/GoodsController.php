<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class GoodsController extends Controller
{

    public function result(Request $request)
    {
        //
        $search = $request->input('search');
        if($search){
            $search_info = '%'.$search.'%';
            $result = DB::table('goods')
                    ->select('gid','uid','gname','listprice','gcid','brid')
                    ->where('gname','like',$search_info)
                    ->get();
            if($result){
                foreach($result as $info=>$value){
                    $uid = $result[$info]['uid'] ? $result[$info]['uid'] : 0;
                    $five = DB::table('picture')
                                ->select('purl')
                                ->where('gid','=',$value['gid'])
                                ->where('ismain','=','1')
                                ->first();
                    $result[$info]['purl'] = $five['purl'];
                    $four = DB::table('store')
                                ->select('sname')
                                ->where('uid','=',$uid)
                                ->first();
                    $result[$info]['sname'] = $four['sname'];
                    $one = DB::table('brand')
                                ->select('brname')
                                ->where('brid','=',$result[$info]['brid'])
                                ->orWhere('gcid','=',$result[$info]['gcid'])
                                ->get();
                    $nav['brand'] = array();
                    foreach ($one as $key => $value_a) {
                        array_push($nav['brand'], $value_a['brname']);
                        
                    }
                    $two = DB::table('attname')
                                ->select('atnname','atnid')
                                ->where('gcid','=',$result[$info]['gcid'])
                                ->get();

                    foreach($two as $key=>$value_b){
                        $three = DB::table('attvalue')
                                ->select('atvname')
                                ->where('atnid','=',$value_b['atnid'])
                                ->get();
                        $nav['detail_atvname'][$value_b['atnname']] = array();

                        foreach($three as $key=>$value_c){
                        array_push($nav['detail_atvname'][$value_b['atnname']],$value_c['atvname']);
                        }
                    }
               
                }
                   return view('home.search_result',['result'=>$result,'search_name'=>$search,'nav'=>$nav]);
            }else{
                return error('/index','没有该商品',3);
            }
            
        }else{
            return redirect('/index');
        }
        
        
    }

    

    public function index(Request $request)
    {
		$gid = $request->input('gid');
		$goods = DB::table('goods')->where('gid','=',$gid)->first();
		$listprice = $goods['listprice'];
		//查询销售属性
		$salearr=DB::table('attname')->select('atnid','atnname')->where('gcid','=',$goods['gcid'])->where('issale','=','true')->orderBy('atnid')->get();
		foreach($salearr as $k=>$sa){
			$salearr[$k]['sav']=DB::table('attvalue')->select('atvid','atvname')->where('atnid','=',$sa['atnid'])->get();
		}
		$skuatvid=DB::table('baseattr')->where('gid','=',$gid)->where('issku','=',1)->lists('atvid');
		$skuatvid=array_unique($skuatvid);
		$purl=DB::table('picture')->select('purl')->where('gid','=',$gid)->first();
		$purl=$purl['purl'];
		//查询sku表
		$sku=DB::table('sku')->select('skuid','skustr','skuprice','skucount')->where('gid','=',$gid)->get();
		$sku=json_encode($sku);
        //商品详情界面
        return view('home.info.goods_item',['salearr'=>$salearr,'listprice'=>$listprice,'sku'=>$sku,'goods'=>$goods,'skuatvid'=>$skuatvid,'purl'=>$purl]);
    }
}
