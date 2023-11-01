<?php

namespace App\Http\Controllers\admin;
use DB;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ImgController extends Controller
{
    //显示所有图片
    public function index(){
        //查询所有的图片信息
        $imgs=DB::table('imgs')->get();
        return view('admin.img.index',['imgs'=>$imgs]);
    }

    //添加图片界面
    public function add(){
        return view('admin.img.add');
    }

    //添加图片操作
    public function insert(Request $request){
        //检测是否有上传文件
        if (!$request->hasFile('impic')) {
           return error('/admin/img/add','对不起，没有文件被上传，请选择上传文件',3);
        }
        //生成文件夹
        $dir=date('Y-m-d');
        //生成文件名
        $fileName=uniqid().'.png';
        //组合上传文件路径存储到数据库中
        $path=$dir.'/'.$fileName;

        //移动上传文件
        $request->file('impic')->move($dir,$fileName);

        //获取所有传参信息
        $imgs=$request->only('imid','imname','iminfo','imlink');
        $imgs['impic']=$path;
        //插入数据库
        $result=DB::table('imgs')->insert($imgs);

        if ($result) {
            //成功跳转到图片管理列表
            return success('/admin/img/index','添加图片成功',2);
        }else{
            //失败返回添加页面
            return error('/admin/img/add','添加图片失败',1);
        }
    }

    //更新图片方法
    public function modify(Request $request){
        //获取图片id
        $imid=$request->input('imid');
        
        //查询图片信息
        $imgs=DB::table('imgs')->where('imid','=',$imid)->first();

        //json编码后返回
        return response()->json($imgs);
    }

    //更新用户操作
    public function update(Request $request){
        //检测是否需要更新图片
        if (!empty($request->file('impic'))) {
            //生成文件夹
            $dir=date('Y-m-d');
            //生成文件名
            $fileName=uniqid().'.png';
            //组合上传文件路径存储到数据库中
            $path=$dir.'/'.$fileName;
             //移动上传文件
            $request->file('impic')->move($dir,$fileName);
             //接收表单传参  更新到数据库
            $imgs=$request->only('imname','iminfo','imlink');
            $imgs['impic']=$path;
        }else{
            //接收表单传参 更新到数据库
            $imgs=$request->only('imname','iminfo','imlink');
        }
        $imid=$request->input('imid');
        $result=DB::table('imgs')->where('imid','=',$imid)->update($imgs);
       
        if ($result) {
            return success('/admin/img/index','更新图片信息成功',1);
        }else{
            return error('/admin/img/index','更新图片信息失败',3);
        }
    }

    //删除图片操作
    public function delete(Request $request){
        $imid=$request->input('imid');
        $result=DB::table('imgs')->where('imid','=',$imid)->delete();
        if ($result) {
            echo 1;
        }else{
            echo 0;
        }
    }
}
