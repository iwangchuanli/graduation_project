<?php

namespace App\Http\Controllers\admin;
use DB;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ImgsController extends Controller
{
    
    //显示所有图片
    public function hompg(){
        //查询所有的图片信息
        $img=DB::table('img')->get();
        return view('admin.img.hompg',['img'=>$img]);
    }

    //添加图片界面
    public function append(){
        return view('admin.img.append');
    }

    //添加图片操作
    public function rinsert(Request $request){
        //检测是否有上传文件
        if (!$request->hasFile('iimg')) {
           return error('/admin/img/append','对不起，没有文件被上传，请选择上传文件',3);
        }
        //生成文件夹
        $dir=date('Y-m');
        //生成文件名
        $fileName=uniqid().'.png';
        //组合上传文件路径存储到数据库中
        $path=$dir.'/'.$fileName;

        //移动上传文件
        $request->file('iimg')->move($dir,$fileName);

        //获取所有传参信息
        $img=$request->only('iid','iname','iinfo','ilink');
        $img['iimg']=$path;
        //插入数据库
        $result=DB::table('img')->insert($img);

        if ($result) {
            //成功跳转到图片管理列表
            return success('/admin/img/hompg','添加图片成功',2);
        }else{
            //失败返回添加页面
            return error('/admin/img/append','添加图片失败',1);
        }
    }

    //更新图片方法
    public function change(Request $request){
        //获取图片id
        $iid=$request->input('iid');
        
        //查询图片信息
        $img=DB::table('img')->where('iid','=',$iid)->first();

        //json编码后返回
        return response()->json($img);
    }

    //更新用户操作
    public function renew(Request $request){
        //检测是否需要更新图片
        if (!empty($request->file('iimg'))) {
            //生成文件夹
            $dir=date('Y-m');
            //生成文件名
            $fileName=uniqid().'.png';
            //组合上传文件路径存储到数据库中
            $path=$dir.'/'.$fileName;
             //移动上传文件
            $request->file('iimg')->move($dir,$fileName);
             //接收表单传参  更新到数据库
            $img=$request->only('iname','iinfo','ilink','iimg');
            $img['iimg']=$path;
        }else{
            //接收表单传参 更新到数据库
            $img=$request->only('iname','iinfo','ilink');
        }
        $iid=$request->input('iid');
        $result=DB::table('img')->where('iid','=',$iid)->update($img);
       
        if ($result) {
            return success('/admin/img/hompg','更新图片信息成功',1);
        }else{
            return error('/admin/img/hompg','更新图片信息失败',3);
        }
    }

    //删除图片操作
    public function cut(Request $request){
        $imid=$request->input('imid');
        $result=DB::table('img')->where('iid','=',$iid)->delete();
        if ($result) {
            echo 1;
        }else{
            echo 0;
        }
    }
}
