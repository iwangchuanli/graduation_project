<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //访问网站前台登录页面
    public function login(){
        //显示网站登录页
        return view('home.login');
    }
    //访问网站前台登录页面
    public function logout(Request $request){
        //显示网站登录页
        $request->session()->flush();
        return redirect('/index');
    }

    //验证登录
    public function checkLogin(Request $request){
       
        //接收前台数据
        $uname = $request->input('TPL_username');
        $upwd = $request->input('TPL_password');

        $upwd = md5($upwd);

        $result = DB::table('users')
                    ->select('uname','uid','uemail','uphone','head')
                    ->where('uname','=',$uname)
                    ->orwhere('uemail','=',$uname)
                    ->orwhere('uphone','=',$uname)
                    ->where('upwd','=',$upwd)
                    ->first();
       if($result){
            //写入session信息
            $request->session()->put('uid',$result['uid']);
            $request->session()->put('uname',$result['uname']);
            $request->session()->put('uemail',$result['uemail']);
            $request->session()->put('uphone',$result['uphone']);
            $request->session()->put('head',$result['head']);

            return redirect('/index');
            
            
        }else{
            return error('/login','登陆失败',3);
            
        }
    }

}
