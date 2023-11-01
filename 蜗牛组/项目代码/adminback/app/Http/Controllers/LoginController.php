<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
   //   首页
    public function index()
    {
        return view('login');
    }

    //  检测登陆页面
    public function checkLogin(Request $request)
    {
        //  账号密码
        $name = $request -> get('userAccount');
        $pwd = $request -> get('userPassword');

        if ( $name == 'admin' & $pwd == 'admin' )
        {
            //  可以登录
            
            //  进入管理界面
            return view('.admin.index');
        }
        else
        {
            return view('login');
        }
    }
}
