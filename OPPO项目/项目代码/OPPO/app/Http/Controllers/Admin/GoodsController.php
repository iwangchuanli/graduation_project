<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class GoodsController extends Controller
{
    //显示商品列表
    public function index(){
        //查询所有商品信息
        $goods = DB::table('goods')
							->orderby('gid','desc')
							->paginate(10);

        return view('Admin.Goods.list',['goods'=>$goods]);
        
    }


    //添加商品界面
    public function add(){
	
        return view('Admin.Goods.add');
    }
    public function insert(Request $request){

        //检测是否有上传文件
        if (!$request->hasFile('gimg')) {
            return error('/admin/goods/add','对不起,列表图片没有上传,请选择上传文件',3);
        }
        
        //生成文件夹
        $dir = 'shopImg';
        //生成文件名
        $fileName = uniqid().'.jpg';
        //组合上传路径存储到数据库中
        $path=$dir.'/'.$fileName;
        //移动上传文件
        $request->file('gimg')->move($dir, $fileName);
        
        //获取插入的信息
        $goods = $request->only(['gname','gtype','gimg','gcolor','network','volume','gprice','vipprice','integrate','gnum','details','gtime']);
        $goods['gimg'] = $path;

        //将商品数据插入数据库
        $result = DB::table('goods')->insert($goods);
        
        //判断用户是否插入成功
        if($result){
            return success('/admin/goods/list','添加商品成功',2);
        }else{
            return error('/admin/goods/add','添加商品失败',3);
        }
    }


    //查找商品界面
    public function search(){
        return view('Admin.Goods.search');
    }
    //查找商品操作
    public function find(Request $request){
        //接收关键字
        $keywords = $request->input('key');
        
        $goods=DB::table('goods')
                        ->where('gid','=',$keywords)
                        ->orWhere('gname','like','%'.$keywords.'%')
                        ->orWhere('gtype','like','%'.$keywords.'%')
                        ->paginate(10);

        return view('/Admin/Goods/list',['goods'=>$goods]); 
      }



    //修改商品界面
    public function modify(Request $request){
        $gid =$request->input('gid');
        $goods = DB::table('goods')->where('gid','=',$gid)->first();
        return view('Admin.Goods.modify',['goods'=>$goods]);
    }

    //修改商品操作
    public  function update(Request $request){

         $gid = $request->input('gid');

        //检测是否有上传文件
        if (!$request->hasFile('gimg')) {
            return error('/admin/goods/modify?gid='.$gid,'对不起,没有文件被上传,请选择上传文件',3);
        }
        
        //生成文件夹
        $dir = date('shopImg');
        //生成文件名
        $fileName = uniqid().'.jpg';
        //组合上传路径存储到数据库中
        $path=$dir.'/'.$fileName;
        //移动上传文件
        $request->file('gimg')->move($dir, $fileName);       

        //接收表单传参  更新到数据库中即可
        $good = $request->only('gname','gtype','gcolor','gtime','gprice','vipprice','integrate','gnum','details','network','volume');
        $good['gimg'] = $path;

        $result = DB::table('goods')->where('gid','=',$gid)->update($good);

        //判断执行结果
        if($result){
            return success('/admin/goods/list','更新商品信息成功',2);
        }else{
            return error('/admin/goods/modify?gid='.$gid,'更新商品信息失败',3);
        }   
        
    }



    //删除商品操作
    public function delete(Request $request){
        //接收用户id
        $gid = $request->input('gid');
        //删除操作
        $result = DB::table('goods')->where('gid','=',$gid)->delete();

        if($result){//删除成功 返回1
            echo 1;
        }else{//删除失败 返回0
            echo 0;
        }
    }
}
