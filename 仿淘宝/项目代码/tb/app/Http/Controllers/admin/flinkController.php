<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class flinkController extends Controller
{
        public function index(){
            $flink=DB::table('flink')->get();
            return view('/admin/flink/index',['flink'=>$flink]);
        }
        

        //添加商品界面
        public function add(){
            return view('/admin/flink/add');
        }

        //添加商品操作
        public function insert(Request $request){
            //检测是否有上传文件
            if(!$request->hasFile('flogo')){
                return error('/admin/flink/add','对不起,没有文件被上传,请选择上传文件!',1);
            }

            //生成文件夹
            $dir=date('Y-m-d');
            //生成文件名
            $fileName=uniqid().'.jpg';
            //组合上传路径存储到数据库中
            $path=$dir.'/'.$fileName;
            //移动上传文件
            $request->file('flogo')->move($dir,$fileName);

            //获取所有传参信息
            $flink=$request->only('fname','furl','ftel','flogo');
            $flink['flogo']=$path;

            //插入数据库
            $result=DB::table('flink')->insert($flink);

            if($result){
                //添加成功 返回商品列表
                return success('/admin/flink/index','添加链接成功',1);
            }else{
                //添加商品失败
                return error('/admin/flink/add','添加链接失败',1);
            }

        }

    //上线操作
    public function lineup(Request $request){
        //接收id
        $fid=$request->input('fid');
        //上线操作
        $result=DB::table('flink')->where('fid','=',$fid)->update(['isonline'=>1]);
        if($result){//删除成功 返回1
            echo 1;
        }else{//删除失败 返回0
            echo 0;
        }
    }

    //下线操作
    public function linedown(Request $request){
        //接收id
        $fid=$request->input('fid');
        //下线操作
        $result=DB::table('flink')->where('fid','=',$fid)->update(['isonline'=>0]);

        if($result){//下线成功 返回1
            echo 1;
        }else{//下线失败 返回0
            echo 0;
        }
    }

    //删除用户操作
    public function delete(Request $request){
        //接收用户id
        $fid=$request->input('fid');
        //删除操作
        $result=DB::table('flink')->where('fid','=',$fid)->delete();

        if($result){//删除成功 返回1
            echo 1;
        }else{//删除失败 返回0
            echo 0;
        }
    }


    //更新方法
    public function modify(Request $request){
        //获取id
        $fid = $request->input('fid');
        //查询信息
        $flink=DB::table('flink')->where('fid','=',$fid)->first();
        $flink['starttime']=date('Y-m-d', $flink['starttime']);
        $flink['endtime']=date('Y-m-d',$flink['endtime']);
        //json编码后返回
        return response()->json($flink);
    }

    //更新用户操作
    public function update(Request $request){

        //接收表单传参 更新数据库即可 修改
        $flink=$request->only('fname','furl','ftel','starttime','endtime');
        $flink['starttime']=strtotime($flink['starttime']);
        $flink['endtime']=strtotime($flink['endtime']);
        $fid = $request->input('fid');
        $result=DB::table('flink')->where('fid','=',$fid)->update($flink);

        //判断执行结果
        if($result){

            return success('/admin/flink/index','更新信息成功',1);
        }else{
            return error('/admin/flink/index','更新信息失败',1);
        }

    }

    //查找界面
       public function find(){
           return view('/admin/flink/find');
       }


       //查找操作
       public function search(Request $request){
           //接收关键字
           $keywords=$request->input('key');

           $allflink=DB::table('flink')
               ->where('fid','=',$keywords)
               ->orwhere('fname','like','%'.$keywords.'%')
               ->orwhere('furl','like','%'.$keywords.'%')
               ->orwhere('ftel','like','%'.$keywords.'%')
               ->get();
           //将查找商品分配到模板中显示
           return view('admin/flink/index',['flink'=>$allflink]);
       }
}
