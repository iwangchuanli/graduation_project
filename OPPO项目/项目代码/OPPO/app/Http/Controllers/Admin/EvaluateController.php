<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class EvaluateController extends Controller
{
    //显示评价列表
    public function index(){
        //查询所有评价信息
        $evaluate = DB::table('evaluate')
									->join('goods', 'evaluate.gid', '=', 'goods.gid')
									->join('user', 'evaluate.uid', '=', 'user.uid')
									->select('evaluate.*', 'goods.gname','user.uname')
									->orderby('eid','desc')
									->paginate(10);
        return view('Admin.Evaluate.list',['evaluates'=>$evaluate]);
    }

    //添加评价界面
    public function add(){
		$good = DB::table('goods')
								->select('gid','gname')
								->get();
		$user = DB::table('user')
								->select('uid','uname')
								->get();						
        return view('Admin.Evaluate.add',['goods'=>$good,'users'=>$user]);
    }
    //添加评价操作
    public function insert(Request $request){
        //检测是否有上传文件
        if (!$request->hasFile('img')) {
            return error('/admin/evaluate/add','对不起,没有文件被上传,请选择上传文件',3);
        }
        
        //生成文件夹
        $dir = 'evaluate';
        //生成文件名
        $fileName = uniqid().'.jpg';
        //组合上传路径存储到数据库中
        $path=$dir.'/'.$fileName;
        //移动上传文件
        $request->file('img')->move($dir, $fileName);
        
        //获取插入的信息
        $evaluate = $request->only(['uid','gid','content','img','etime']);
        $evaluate['img'] = $path;

        //将商品数据插入数据库
        $result = DB::table('evaluate')->insert($evaluate);
        
        //判断用户是否插入成功
        if($result){
            return success('/admin/evaluate/list','添加评论成功',2);
        }else{
            return error('/admin/evaluate/add','添加评论失败',3);
        }
    }


    //查找评价界面
    public function search(){
        return view('Admin.Evaluate.search');
    }
    //查找评价操作
    public function find(Request $request){
        //接收关键字
        $keywords = $request->input('key');
        
        $evaluate=DB::table('evaluate')
                        ->join('goods', 'evaluate.gid', '=', 'goods.gid')
                        ->join('user', 'evaluate.uid', '=', 'user.uid')
                        ->select('evaluate.*','goods.gname','user.uname')
                        ->where('evaluate.eid','=',$keywords)
                        ->orwhere('goods.gname','like','%'.$keywords.'%')
                        ->orwhere('user.uname','like','%'.$keywords.'%')
                        ->orWhere('evaluate.content','like','%'.$keywords.'%')
                        ->paginate(10);
                        
        //将查找用户分配到模板中显示
        return view('/Admin/Evaluate/list',['evaluates'=>$evaluate]);
    }

    //修改用户评价界面
    public function modify(Request $request){
        $eid =$request->input('eid');
        $evaluate = DB::table('evaluate')
								->join('goods','evaluate.gid','=','goods.gid')
								->join('user','evaluate.uid','=','user.uid')
								->select('evaluate.*','goods.gname','user.uname')
                                ->where('eid','=',$eid)
                                ->first();

        return view('Admin.Evaluate.modify',['evaluates'=>$evaluate]);
    }
    //修改评价操作
    public  function update(Request $request){

        $eid = $request->input('eid');

        //检测是否有上传文件
        if (!$request->hasFile('img')) {
            return error('/admin/evaluate/modify?eid='.$eid,'对不起,没有文件被上传,请选择上传文件',3);
        }
        
        //生成文件夹
        $dir = 'evaluate';
        //生成文件名
        $fileName = uniqid().'.jpg';
        //组合上传路径存储到数据库中
        $path=$dir.'/'.$fileName;
        //移动上传文件
        $request->file('img')->move($dir, $fileName);
        
        //接收表单传参  更新到数据库中即可
        $evaluate = $request->only('uid','gid','content','img','etime');
        $evaluate['img'] = $path;

        $result = DB::table('evaluate')
                                ->where('eid','=',$eid)
                                ->update($evaluate);

        //判断执行结果
        if($result){
            return success('/admin/evaluate/list','更新商品评价成功',2);
        }else{
            return error('/admin/evaluate/modify?eid='.$eid,'更新商品评价失败',3);
        }
    }


    //删除评价操作
    public function delete(Request $request){
        //接收用户id 商品id
        $eid = $request->input('eid');
        //删除操作
        $result = DB::table('evaluate')
                                    ->where('eid','=',$eid)
                                    ->delete();
		 
        if($result){//删除成功 返回1
            echo 1;
        }else{//删除失败 返回0
            echo 0;
        }
    }
}

