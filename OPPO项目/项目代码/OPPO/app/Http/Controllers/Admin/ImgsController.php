<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ImgsController extends Controller
{
    //显示商品图片列表
    public function index(){
        //查询所有商品图片信息
		$image = DB::table('imgs')
            ->join('goods', 'imgs.gid', '=', 'goods.gid')
            ->select('imgs.*', 'goods.gname')
			->orderby('pid','desc')
            ->paginate(10);

        return view('Admin.Imgs.list',['images'=>$image]);
    }

    //添加商品图片界面
    public function add(){
		$good = DB::table('goods')
								->select('gid','gname')
								->get();
        return view('Admin.Imgs.add',['goods'=>$good]);
    }
    //添加商品图片操作
    public function insert(Request $request){
       
      //检测是否有上传文件
        if (!$request->hasFile('image')) {
            return error('/admin/imgs/add','对不起,列表图片没有上传,请选择上传文件',3);
        }
        
        //生成文件夹
        $dir = 'shopImg/phone';
        //生成文件名
        $fileName = uniqid().'.jpg';
        //组合上传路径存储到数据库中
        $path=$dir.'/'.$fileName;
        //移动上传文件
        $request->file('image')->move($dir, $fileName);
        
        //获取插入的信息
        $img = $request->only(['image','gid','imgwrite']);
        $img['image'] = $path;

        //将商品数据插入数据库
        $result = DB::table('imgs')->insert($img);
        
        //判断用户是否插入成功
        if($result){
            return success('/admin/imgs/list','添加商品图片成功',2);
        }else{
            return error('/admin/imgs/add','添加商品图片失败',3);
        }
    }



    //查找商品图片界面
    public function search(){
        return view('Admin.Imgs.search');
    }
    //查找商品图片操作
    public function find(Request $request){
        //接收关键字
        $keywords = $request->input('key');
        //查找商品名称

        $image=DB::table('imgs')
                        ->join('goods','imgs.gid','=','goods.gid')
                        ->where('imgs.pid','=',$keywords)
                        ->orwhere('imgs.pid','=',$keywords)
                        ->orWhere('goods.gname','like','%'.$keywords.'%')
                        ->orWhere('imgs.imgwrite','like','%'.$keywords.'%')
                        ->paginate(10);
                        
        //将查找用户分配到模板中显示
        return view('/Admin/Imgs/list',['images'=>$image]);
    }



    //修改商品图片界面
    public function modify(Request $request){
   
        $pid =$request->input('pid');
        $image = DB::table('imgs')
								->join('goods', 'imgs.gid', '=', 'goods.gid')
								->where('pid','=',$pid)
								->select('imgs.*', 'goods.gname')                              
                                ->first();
        return view('Admin.imgs.modify',['images'=>$image]);
    }
    //修改商品图片操作
    public  function update(Request $request){

        $pid = $request->input('pid');

        //检测是否有上传文件
        if (!$request->hasFile('image')) {
            return error('/admin/imgs/modify?pid='.$pid,'对不起,没有文件被上传,请选择上传文件',3);
        }
        
        //生成文件夹
        $dir = 'shopImg/phone';
        //生成文件名
        $fileName = uniqid().'.jpg';
        //组合上传路径存储到数据库中
        $path=$dir.'/'.$fileName;
        //移动上传文件
        $request->file('image')->move($dir, $fileName);
        
        //接收表单传参  更新到数据库中即可
        $image = $request->only('pid','gid','image','imgwrite');
        $image['image'] = $path;

        $result = DB::table('imgs')
                                ->where('pid','=',$pid)
                                ->update($image);

        //判断执行结果
        if($result){
            return success('/admin/imgs/list','更新商品评价成功',2);
        }else{
            return error('/admin/imgs/modify?pid='.$pid,'更新商品评价失败',3);
        }
    }

    //删除商品图片操作
    public function delete(Request $request){
        //接收用户id
        $pid = $request->input('pid');
        //删除操作
        $result = DB::table('imgs')->where('pid','=',$pid)->delete();

        if($result){//删除成功 返回1
            echo 1;
        }else{//删除失败 返回0
            echo 0;
        }
    }
}
