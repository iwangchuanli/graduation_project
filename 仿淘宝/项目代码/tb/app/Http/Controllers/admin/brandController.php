<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class brandController extends Controller
{
    public function index(){
        $brand=DB::table('brand')
                        ->join('goodsclass','brand.gcid','=','goodsclass.gcid')
                        ->select('brand.*','goodsclass.*')
                        ->get();
        foreach($brand as $k=>$v){
            $pcname = DB::table('goodsclass')->select('gcname')->where('gcid','=',$v['pcid'])->first();
            $brand[$k]['gcname'].='('.$pcname['gcname'].')';
        }
        return view('/admin/brand/index',['brand'=>$brand]);
    }

    //添加商品分类
    public function add(){
        $goodsclass=DB::table('goodsclass')->select('gcid','gcname','pcid')->where('ispclass','=',0)->get();
        foreach($goodsclass as $k=>$v){
            $pcname = DB::table('goodsclass')->select('gcname')->where('gcid','=',$v['pcid'])->first();
            $goodsclass[$k]['gcname'].='('.$pcname['gcname'].')';
        }
        return view('admin/brand/add',['goodsclass'=>$goodsclass]);
    }

    //添加子类操作
    public function insert(Request $request){

            //检测是否有上传文件
            if(!$request->hasFile('brlogo')){
                return error('/admin/brand/add','对不起,没有文件被上传,请选择上传文件!',1);
            }

            //生成文件夹
            $dir=date('Y-m-d');
            //生成文件名
            $fileName=uniqid().'.jpg';
            //组合上传路径存储到数据库中
            $path=$dir.'/'.$fileName;
            //移动上传文件
            $request->file('brlogo')->move($dir,$fileName);
            

            //获取所有传参信息
            $brand=$request->only('gcid','brname','brlogo');
            $brand['brlogo']=$path;
            //插入数据库
            $result=DB::table('brand')->insert($brand);

            if($result){
                //添加成功 返回商品列表
                return success('/admin/brand/index','添加成功',1);
            }else{
                //添加商品失败
                return error('/admin/brand/add','添加失败',1);
            }
    }

    //删除品牌操作
    public function delete(Request $request){
        //获取id
        $brid=$request->input('brid');
        //删除操作
        $result=DB::table('brand')->where('brid','=',$brid)->delete();
        //判断是否删除成功
        if($result){//删除成功
            echo 1;
        }else{//删除失败
            echo 0;
        }
    }

    //查找界面
       public function find(){
           return view('/admin/brand/find');
       }


       //查找操作
       public function search(Request $request){
           //接收关键字
           $keywords=$request->input('key');

           $allbrand=DB::table('brand')
               ->join('goodsclass','brand.gcid','=','goodsclass.gcid')
               ->where('brid','=',$keywords)
               ->orwhere('brname','like',$keywords)
               ->orwhere('gcname','like',$keywords)
               ->get();
           //将查找商品分配到模板中显示
           return view('admin/brand/index',['brand'=>$allbrand]);
       }

}
