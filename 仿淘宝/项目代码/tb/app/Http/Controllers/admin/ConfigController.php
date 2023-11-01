<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ConfigController extends Controller
{
    //显示网站配置
    public function index(){
        //查询所有的配置信息
        $con = DB::table('config')->get();
        foreach ($con as $key => $value) {
           $conf = $value;
        }

        //dd($con);
        return view('admin.config.index',['conf'=>$conf]);
    }
    //修改网站配置信息界面
    public function modify(Request $request){
        //获取webid
        $webid =$request->input('webid');
 
        //查询配置信息
        $conf=DB::table('config')->where('webid','=',$webid)->first();

        //json编码后返回
        return response()->json($conf);
    }

    //修改网站配置信息操作
    public function update(Request $request){
        //检测是否需要更新logo
        if (!empty($request->file('weblogo'))) {
            //生成文件夹
            $dir='conf';
            //生成文件名
            $fileName=uniqid().'.jpg';
            //组合上传文件路径存储到数据库中
            $path=$dir.'/'.$fileName;
             //移动上传文件
            $request->file('weblogo')->move($dir,$fileName);
             //接收表单传参  更新到数据库
            $conf=$request->only('webname','webkey','webright','webswitch');

            $conf['weblogo']=$path;
        }else{
            //接收表单传参 更新到数据库
            $conf=$request->only('webname','webkey','webright','webswitch');
        }

        $webid=$request->input('webid');
        $result=DB::table('config')->where('webid','=',$webid)->update($conf);
      
        if ($result) {
            return success('/admin/config/index','更新配置信息成功',1);
        }else{
            return error('/admin/config/index','更新配置信息失败',3);
        }
    }
}
