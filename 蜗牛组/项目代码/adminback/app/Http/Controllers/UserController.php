<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //  所有用户
    public function index()
    {
        //  查询数据库，显示所有用户
        $users = DB::table('admin') -> get();

        //  查询所有的角色
        $roles = DB::table('role') -> get();

        return view('.user.index',['users'=>$users,'roles'=>$roles]);
    }

    //  增加用户界面
    public function addPage()
    {
        //  查询数据库里面的所有角色
        //  查询所有的角色
        $roles = DB::table('role') -> get();

        //  返回添加界面
        return view('.user.add',['roles'=>$roles]);
    }

    //  添加用户方法 
    public function add(Request $request)
    {
        //  获取所有内容
        $pwd = $request -> input('pwd');
        $repwd = $request -> input('repwd');

        if ( $pwd != $repwd )
        {
            return back() -> withInput();
        }

        $name = $request -> input('name');

        $rids = $request -> input('rids');

        $rstr = join(',',$rids);

        //  将数据写入数据库
        $res = DB::table('admin') -> insert(['name'=>$name,'password'=>md5($pwd),'rids'=>$rstr]);

        return redirect('user/index');
    }

    //  修改用户界面
    public function modifyPage(Request $request)
    {
        //  获得修改主键
        $id = $request -> get('id');

        //  查找所有角色
        $role = DB::table('admin') ->where('id',$id) -> first();

        $rid = $role['rids'];

        $ridArr = explode(',', $rid);

        $role['rArr'] = $ridArr;

        return $role;
    }

    //  修改信息操作
    public function modify(Request $request)
    {
        //  获得想要的数据
        $id = $request -> input('id');
        $name = $request -> input('name');
        $rids = $request -> input('rids');

        $rstr = join(',',$rids);

        //  更新数据
        $res = DB::table('admin') -> where('id',$id) -> update(['name'=>$name,'rids'=>$rstr]);

        return redirect('user/index');
    }

    //  删除用户方法
    public function delete(Request $request)
    {
        $id = $request -> get('id');

        $res = DB::table('admin') -> where('id',$id) -> delete();

        return $res;
    }
}
