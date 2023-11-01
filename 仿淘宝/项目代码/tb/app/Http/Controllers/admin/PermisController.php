<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PermisController extends Controller
{
    //显示权限列表
    public function index(){
        //查询用户权限
        $users=DB::table('users')->select('uid','uname','rids')->get();
        $roles=DB::table('role')->get();
        $permis=DB::table('permission')->get();
        return view('admin.permission.index',['users'=>$users,'roles'=>$roles,'permis'=>$permis]);
    }
    //添加角色界面
    public function add(){
        return view('admin.permission.add');
    }
    //添加角色操作
    public function insert(Request $request){
        //插入角色信息
        $rid=$request->input('rid');
        $rname=$request->input('rname');
        $pids=$request->input('pids');
        $result=DB::insert('insert into tb_role (rid, rname,pids) values (?,?,?)', [$rid,$rname,$pids]);
        if ($result) {
            return success('/admin/permission/index','添加成功',2);
        }else{
            return error('/admin/permission/add','添加失败',1);
        }
    }

    //用户权限修改界面
    public function update(Request $request){
        $uid=$request->input('uid');
        $user=DB::table('users')->where('uid','=',$uid)->first();
        return view('admin.permission.update',['user'=>$user]);
    }
    //用户权限修改操作
    public function modify(Request $request){

        $uid=$request->input('uid');
        $uname=$request->input('uname');
        $rids=$request->input('rids');
        $result=DB::table('users')->where('uid','=',$uid)->update(['rids'=>$rids]);
        if ($result) {
            return success('/admin/permission/index','修改成功',2);
        }else{
            return error('/admin/permission/modify','修改失败',1);
        }
    }

     //添加权限界面
    public function adds(){
        return view('admin.permission.adds');
    }
    //添加权限操作
    public function inserts(Request $request){
        //插入角色信息
        $pid=$request->input('pid');
        $pname=$request->input('pname');
        $purl=$request->input('purl');
        $result=DB::insert('insert into tb_permission (pid, pname,purl) values (?,?,?)', [$pid,$pname,$purl]);
        if ($result) {
            return success('/admin/permission/index','添加成功',2);
        }else{
            return error('/admin/permission/adds','添加失败',1);
        }
    }

    //删除角色
    public function delete(Request $request){
        $rid = $request->input('rid');
        $result=DB::table('role')->where('rid','=',$rid)->delete();
    
        if($result){
            echo 1;
        }else{
            echo 0;
        }
    }
}
