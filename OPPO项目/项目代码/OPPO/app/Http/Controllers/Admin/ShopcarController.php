<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ShopcarController extends Controller
{
    //显示商品列表
    public function index(){
        //查询所有商品信息
        $shopcars = DB::table('shopcar')
                            ->join('user','shopcar.uid','=','user.uid')
                            ->join('goods','shopcar.gid','=','goods.gid')
                            ->select('shopcar.*','user.uname','goods.gname')
							->orderby('shopcar.cid','desc')
							->paginate(10);

        return view('Admin.Shopcar.list',['shopcars'=>$shopcars]);
        
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
        $shopcar = $request->only(['gname','gtype','gimg','gcolor','network','volume','gprice','vipprice','integrate','gnum','details','gtime']);
        $goods['gimg'] = $path;

        //将商品数据插入数据库
        $result = DB::table('shopcar')->insert($shopcar);
        
        //判断用户是否插入成功
        if($result){
            return success('/admin/shopcar/list','添加购物车商品成功',2);
        }else{
            return error('/admin/shopcar/add','添加购物车商品失败',3);
        }
    }


    //查找商品界面
    public function search(){
        return view('Admin.Shopcar.search');
    }
    //查找商品操作
    public function find(Request $request){
        //接收关键字
        $keywords = $request->input('key');
        
        $shopcars=DB::table('shopcar')
						->join('user','shopcar.uid','=','user.uid')
                        ->join('goods','shopcar.gid','=','goods.gid')
                        ->where('shopcar.cid','=',$keywords)
						->select('shopcar.*','goods.gname','user.uname')
                        ->paginate(10);

        return view('/Admin/Shopcar/list',['shopcars'=>$shopcars]); 
      }



    //修改商品界面
    public function modify(Request $request){
        $cid =$request->input('cid');
        $shopcars = DB::table('shopcar')
									->join('user','shopcar.uid','=','user.uid')
									->join('goods','shopcar.gid','=','goods.gid')
									->where('shopcar.cid','=',$cid)
									->first();
        return view('Admin.shopcar.modify',['shopcars'=>$shopcars]);
    }

    //修改商品操作
    public  function update(Request $request){

         $cid = $request->input('cid');     

        //接收表单传参  更新到数据库中即可
        $shopcar = $request->only('cid','gid','uid','num');

        $result = DB::table('shopcar')->where('cid','=',$cid)->update($shopcar);

        //判断执行结果
        if($result){
            return success('/admin/shopcar/list','更新购物车商品信息成功',2);
        }else{
            return error('/admin/shopcar/modify?cid='.$cid,'更新购物车商品信息失败',3);
        }   
        
    }



    //删除商品操作
    public function delete(Request $request){
        //接收用户id
        $cid = $request->input('cid');
        //删除操作
        $result = DB::table('shopcar')->where('cid','=',$cid)->delete();

        if($result){//删除成功 返回1
            echo 1;
        }else{//删除失败 返回0
            echo 0;
        }
    }
}
