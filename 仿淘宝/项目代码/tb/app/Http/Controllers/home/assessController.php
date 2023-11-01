<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class assessController extends Controller
{
	//店铺
    public function orindex(){
        //显示评价
        $orassess=DB::table('assess')
                        ->join('users','assess.uid','=','users.uid')
                        ->join('goods','assess.gid','=','goods.gid')
                        ->select('assess.*','users.*','goods.*')
                        ->paginate(6);
                      
        //dd($orassess);
        return view('home/orassess',['orassess'=>$orassess]);
    }


    public function index(){
        //显示评价
        $assess=DB::table('assess')
                        ->join('users','assess.uid','=','users.uid')
                        ->join('goods','assess.gid','=','goods.gid')
                        ->select('assess.*','users.*','goods.*')
                        ->paginate(6);;
        return view('home/assess',['assess'=>$assess]);
    }

    //评论操作
    public function insert(Request $request){
            //获取所有传参信息
            $assess=$request->only('ascontent','astime','uid','gid');
            $assess['astime']=strtotime($assess['astime']);

            //插入数据库
            $result=DB::table('assess')->insert($assess);

            if($result){
                //添加成功 返回商品列表
                return success('/home/orassess/orindex','评论成功',1);
            }else{
                //添加商品失败
                return error('/home/assess/index','评论失败',1);
            }

        }

}
