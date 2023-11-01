<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class GoodsController extends Controller
{
	
	
    //显示网站前台商品界面
    public function index(){
        //显示商品首页
        $goodPhone = DB::table('goods')->where('gtype','!=','其它')->get();
        $goodother = DB::table('goods')->where('gtype','=','其它')->get();

        //截取手机前8条数据
        $goodPhone=array_slice($goodPhone,0,8);

        //截取手机配件前8条数据
        $goodother=array_slice($goodother,0,8);

        return view('Home.shop.index',['goodPhone'=>$goodPhone,'goodother'=>$goodother]);
    }


    //显示网站前台产品界面
    public function products(){
        //查询所有产品
        $goodR = DB::table('goods')->where('gtype','=','R系列')->get();
        $goodA = DB::table('goods')->where('gtype','=','A系列')->get();
        $goodN = DB::table('goods')->where('gtype','=','N系列')->get();
        $goodFind = DB::table('goods')->where('gtype','=','find系列')->get();
        
        return view('Home.shop.products',['goodR'=>$goodR,'goodA'=>$goodA,'goodN'=>$goodN,'goodFind'=>$goodFind]);
    }


    //显示手机商品详情
    public function phone(Request $request){
        //查询商品详情
        $gid = $request->input('gid');
        
        $good = DB::table('goods')
                            ->where('gid','=',$gid)
                            ->first();

        $goodc = DB::table('goods')
                            ->where('gtype','=',$good['gtype'])
                            ->where('network','=',$good['network'])
                            ->where('volume','=',$good['volume'])
                            ->where('gprice','=',$good['gprice'])
                            ->select('gid','gcolor')
                            ->get();

        $imgm = DB::table('imgs')
                            ->where('gid','=',$gid)
                            ->where('imgwrite','=','中图')
                            ->select('image')
                            ->get(); 
        $imgb = DB::table('imgs')
                            ->where('gid','=',$gid)
                            ->where('imgwrite','=','详情图')
							->select('image')
                            ->get();
        $imgt = DB::table('imgs')
                            ->where('gid','=',$gid)
                            ->where('imgwrite','=','参数图')
							->select('image')
                            ->get();

        $evaluate = DB::table('evaluate')
                            ->where('gid','=',$gid)
                            ->orderby('eid','desc')
                            ->paginate(10);
        $eimage = DB::table('evaluate')
							->where('gid','=',$gid)
							->where('img','!=','')
							->get();
        return view('Home.shop.391',['goods'=>$good,'imgm'=>$imgm,'imgb'=>$imgb,'imgt'=>$imgt,'evaluates'=>$evaluate,'goodc'=>$goodc,'eimgs'=>$eimage]);
    }



    //显示手机配件商品详情
    public function phoneother(Request $request){
        $gid = $request->input('gid');
        $good = DB::table('goods')
                            ->where('gid','=',$gid)
                            ->first();
							
		$goodc = DB::table('goods')
							->where('gtype','=',$good['gtype'])
							->where('gprice','=',$good['gprice'])
							->select('gcolor','gid')
							->get();
        
        $imgm = DB::table('imgs')
                            ->where('gid','=',$gid)
                            ->where('imgwrite','=','中图')
                            ->select('image')
                            ->get(); 
        $imgb = DB::table('imgs')
                            ->where('gid','=',$gid)
                            ->where('imgwrite','=','详情图')
							->select('image')
                            ->get();
        $evaluate = DB::table('evaluate')
                            ->where('gid','=',$gid)
                            ->orderby('eid','edsc')
                            ->paginate(10);                     
        return view('Home.shop.385',['goods'=>$good,'imgm'=>$imgm,'imgb'=>$imgb,'evaluates'=>$evaluate,'goodc'=>$goodc]);
    }



    //显示手机列表
    public function goodslist(){
        $good = DB::table('goods')->where('gtype','!=','其它')->paginate(12);
        return view('Home.shop.goods_list',['goods'=>$good]);
    }
    //手机查询操作
    public function select(Request $request){
        $id = $request->input('id');
        $gtype = $request->input('gtype');
        $volume = $request->input('volume');
       
        $good = DB::table('goods')
                                ->where('network','=',$id)
                                ->orwhere('gtype','=',$gtype)
                                ->orwhere('volume','=',$volume)
                                ->paginate(10);

        if($good){
            return view('Home.shop.goods_list',['goods'=>$good]);
        }else{
            return error('/shop/goodslist','查找商品失败',3);
        }
    }

    
    //显示评论页面
    public function add(Request $request){
        $gid = $request->input('gid');
        $good = DB::table('goods')
                            ->where('gid','=',$gid)
                            ->select('gimg','gname','gid')
                            ->first();
		//获取用户id
		$uid=$request->Session()->get('uid');
		
		$result = DB::table('order')
								->where('uid','=',$uid)
								->where('gid','=',$gid)									
								->first();
								
		//print_r(count($result));
		if(count($result)==0){
			return error('/shop/goodslist','请购买商品,再评价',3);
		}else{
			return view('Home.shop.1',['goods'=>$good]);
		}
        
    }

    //添加评论
    public function insert(Request $request){
		
		//alert($uid);
        //接收商品id
        $gid = $request->input('gid');
		
		//检测是否有上传文件
		if (!$request->hasFile('img')) {
			//获取插入数据
			$result=$request->only('gid','content');

		}else{
		   //生成文件夹
			$dir = 'evaluate';
			//生成文件名
			$fileName = uniqid().'.jpg';
			//组合上传路径存储到数据库中
			$path=$dir.'/'.$fileName;
			//移动上传文件
			$request->file('img')->move($dir, $fileName);
			
			//获取插入的信息
			$result = $request->only(['gid','content']);
			$result['img'] = $path;
		}
		$date = date('Y-m-d H:i:s');
		$result['etime']=$date;
		//添加操作
		$result = DB::table('evaluate')->insert($result);

		$one = DB::table('goods')->where('gid','=',$gid)->select('gtype')->first();
		//var_dump($one);
		if($result){//成功 返回1
			if($one['gtype'] == '其它'){
				return success('/shop/385?gid='.$gid,'添加商品评价成功',2);
			}else{
				return success('/shop/391?gid='.$gid,'添加商品评价成功',2);
			}

		}else{//失败 返回0
			return error('/shop/1?gid='.$gid,'添加商品评价失败',3);
		}
			
  
    }
    
}
