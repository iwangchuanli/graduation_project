<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PowerController extends Controller
{
    //  查看所有权限
    public function index()
    {
        //  查询数据库，列出所有权限
        $powers = DB::table('power') -> get();

        return view('.power.index',['users'=>$powers]);
    }

    //  添加权限页面
    public function addPage()
    {
        return view('.power.add');
    }

    //  添加权限方法
    public function add(Request $request)
    {
        //  获取传导的内容
        $pname = $request -> input('pname');
        $purl = $request -> input('purl');

        //  将内容写进数据库
        DB::table('power') -> insert(['pname'=>$pname,'purl'=>$purl]);

        //  查询数据库，列出所有权限
        $powers = DB::table('power') -> get();

        return view('.power.index',['users'=>$powers]); 
    }

    //  获取权限信息操作
    public function modifyPage(Request $request)
    {
        //  获取主键
        $pid = $request -> get('pid');

        $res = DB::table('power') -> where('pid',$pid) -> first();

        return $res;
    }

    //  权限修改操作
    public function modify(Request $request)
    {
        //  获取相关信息
        $pid = $request -> input('pid');
        $pname = $request -> input('pname');
        $purl = $request -> input('purl');

        //  进行修改操作
        $res = DB::table('power') -> where('pid',$pid) -> update(['pname'=>$pname,'purl'=>$purl]);

        //  查询数据库，列出所有权限
        $powers = DB::table('power') -> get();

        return view('.power.index',['users'=>$powers]); 
    }

    //  删除权限操作
    public function delete(Request $request)
    {
        //  获取信息
        $pid = $request -> input('pid');

        //  数据库操作
        $res = DB::table('power') -> where('pid',$pid) -> delete();

        return $res;

    }
}
