<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PerController extends Controller
{
    //显示权限列表
    public function index(){
        //查询用户权限
        $users=DB::table('users')->select('uid','uname','rids')->get();
        $roles=DB::table('role')->get();
        $permis=DB::table('permission')->get();
        return view('admin.permission.index',['users'=>$users,'roles'=>$roles,'permis'=>$permis]);
    }

     //用户权限修改界面
    public function updater(Request $request){
        $rid=$request->input('rid');
        $role=DB::table('role')->where('rid','=',$rid)->first();
        return view('admin.permission.updater',['role'=>$role]);
    }
    //用户权限修改操作
    public function modifyr(Request $request){

        $rid=$request->input('rid');
        $rname=$request->input('rname');
        $pids=$request->input('pids');
        $result=DB::table('role')->where('rid','=',$rid)->update(['pids'=>$pids]);
       // dd($result);
        if ($result) {
            return success('/admin/permission/index','修改成功',2);
        }else{
            return error('/admin/permission/modifyr','修改失败',1);
        }
    }

     //用户权限修改界面
    public function updatep(Request $request){
        $pid=$request->input('pid');
        $permission=DB::table('permission')->where('pid','=',$pid)->first();
        return view('admin.permission.updatep',['permission'=>$permission]);
    }
    //用户权限修改操作
    public function modifyp(Request $request){

        $pid=$request->input('pid');
        $pname=$request->input('pname');
        $purl=$request->input('purl');
        $result=DB::table('permission')->where('pid','=',$pid)->update(['purl'=>$purl]);
        if ($result) {
            return success('/admin/permission/index','修改成功',2);
        }else{
            return error('/admin/permission/modifyp','修改失败',1);
        }
    }

    //删除权限
    public function pdelete(Request $request){
        $pid = $request->input('pid');
        $result=DB::table('permission')->where('pid','=',$pid)->delete();
        if($result){
            echo 1;
        }else{
            echo 0;
        }
    }
}
