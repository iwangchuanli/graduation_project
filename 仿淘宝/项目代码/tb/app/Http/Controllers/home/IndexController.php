<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
   //访问网站前台方法
    public function index(Request $request){
        //查询所有分类
		$lunbo=DB::table('imgs')->get();
        $pclass = DB::table('goodsclass')->where('ispclass','=',1)->get();
        $sclass = DB::table('goodsclass')->where('ispclass','!=',1)->get();
        $pgroup = DB::table('goodsclass')->where('ispclass','=',1)->orderBy('groupid')->lists('groupid');
        $pgroup = array_unique($pgroup);
        //显示网站首页
        $flink=DB::table('flink')->get();
        $request->session()->put('flink',$flink);
        return view('home.index',['pgroup'=>$pgroup,'pclass'=>$pclass,'sclass'=>$sclass,'lunbo'=>$lunbo]);
    }
    
}
