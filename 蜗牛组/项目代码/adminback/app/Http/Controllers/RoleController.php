<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    //  查看所有权限
    public function index()
    {
        //  链接数据库查看权限信息
        $roles = DB::table('role') -> get();

        //  查询所有的 权限信息
        $powers = DB::table('power') -> get();

        return view('.role.index',['users'=>$roles,'powers'=>$powers]);
    }

    //  角色添加页面
    public function addPage()
    {
        //  查询所有的 权限信息
        $powers = DB::table('power') -> get();

        return view('.role.add',['powers'=>$powers]);
    }

    //  角色添加方法
    public function add(Request $request)
    {
        //  获得信息
        $rname = $request -> input('rname');
        $rpids = $request -> input('pids');

        //  把获得的数据编程字符串
        $rstr = join(',',$rpids);

        //  把数据写入到数据库
        $res = DB::table('role') -> insert(['rname'=>$rname,'pids'=>$rstr]);

        //  返回列表页面
        //  链接数据库查看权限信息
        $roles = DB::table('role') -> get();

        return view('.role.index',['users'=>$roles]);
    }

    //  获取角色信息
    public function modifyPage(Request $request)
    {
        //  获取主键
        $rid = $request -> get('rid');

        $res = DB::table('role') -> where('rid',$rid) -> first();

        $pid = $res['pids'];

        $pArr = explode(',', $pid);

        $res['pArr'] = $pArr;

        return $res;
    }

    //  角色信息修改
    public function modify(Request $request)
    {
        //  获取传过来的相应信息
        $rid = $request -> input('rid');
        $rname = $request -> input('rname');
        $rpids = $request -> input('rpids');

        //  把获得的数据编程字符串
        $rstr = join(',',$rpids);

        //  把数据写入数据库
        $res = DB::table('role') -> where('rid',$rid) -> update(['rname'=>$rname,'pids'=>$rstr]);

        return redirect('role/index');
    }        

    //  角色信息删除
    public function delete(Request $request)
    {
        //  获取传过来的相应信息
        $rid = $request -> input('rid');

        //  执行数据库操作
        $res = DB::table('role') -> where('rid',$rid) -> delete();

        return $res;
    }
}
