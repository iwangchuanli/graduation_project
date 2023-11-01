<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use DB;
use session;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CollectController extends Controller
{
    //店铺收藏查询
    public function collect(Request $request)
    {
        //
        $uid = $request->session()->get('uid');

        //查询所有收藏店铺
        $result2 = DB::table('collect')
                    ->distinct()
                    ->where('uid','=',$uid)
                    ->orderBy('sid', 'asc')
                    ->lists('sid');
        //弹出默认的0
        if(in_array(0, $result2)){
            array_shift($result2);
        }

        foreach ($result2 as $key => $value) {
            //查询店铺信息
            $result[$value-1]=DB::table('store')
                    ->where('sid','=',$value)
                    ->first();
            $result[$value-1]['goods'] = DB::table('goods')
                    ->where('uid','=', $result[$value-1]['uid'])
                    ->get();
            foreach($result[$value-1]['goods'] as $one => $two){
                $three = DB::table('picture')
                    ->select('purl')
                    ->where('gid','=',$two['gid'])
                    ->first();

                $result[$value-1]['goods'][$one]['purl']=$three['purl'];
            }
        }
        return view('home.userinfo.collect',['result'=>$result]);
    }

    //宝贝收藏查询
    public function collect_item(Request $request)
    {
        //
        $uid = $request->session()->get('uid');

        //查询所有收藏宝贝
        $result = DB::table('collect')
                    ->distinct()
                    ->where('uid','=',$uid)
                    ->orderBy('gid', 'asc')
                    ->lists('gid');
        //弹出默认的0
        if(in_array(0, $result)){
            array_shift($result);
        }

        foreach ($result as $key => $value) {
            //查询宝贝信息
            $info[$value] = DB::table('goods')
                            ->join('picture', 'goods.gid', '=', 'picture.gid')
                            ->where('picture.ismain','=','1')
                            ->where('goods.gid','=',$value)
                            ->select('goods.gname','goods.listprice','picture.purl','goods.gid')
                            ->get();
        }
 
        return view('home.userinfo.collect-item',['info'=>$info]);
    }

    //宝贝收藏添加
    public function itemadd(Request $request,$gid)
    {   
        //ajax处理
        $collect['gid'] = $gid;
        $collect['uid'] = $request->session()->get('uid');
        $result = DB::table('collect')
                    ->insert($collect);
        if($result){
            //收藏成功
            echo 1;
        }else{
            echo 0;
        }

    }

    //宝贝收藏删除
    public function itemdel(Request $request,$gid)
    {
        //ajax处理
        $uid = $request->session()->get('uid');
        $result = DB::table('collect')
                    ->where('gid','=',$gid)
                    ->where('uid','=',$uid)
                    ->delete();
        if($result){
            //删除成功
            echo 1;
        }else{
            echo 0;
        }
    }

    //店铺收藏添加
    public function sadd(Request $request,$gid)
    { 
        //ajax处理
        $result = DB::table('goods')
                    ->select('uid')
                    ->where('gid','=',$gid)
                    ->first();

        $result = DB::table('store')
                    ->select('sid')
                    ->where('uid','=',$result['uid'])
                    ->first();
        $collect['sid'] =$result['sid'];
        $collect['uid'] = $request->session()->get('uid');

        $result = DB::table('collect')
                    ->insert($collect);
        if($result){
            //收藏成功
            echo 1;
        }else{
            echo 0;
        }
    }

    //店铺收藏删除
    public function sdel(Request $request,$sid)
    {
        //ajax处理
        $uid = $request->session()->get('uid');
        $result = DB::table('collect')
                    ->where('sid','=',$sid)
                    ->where('uid','=',$uid)
                    ->delete();
        if($result){
            //删除成功
            echo 1;
        }else{
            echo 0;
        }
    }


    
}
