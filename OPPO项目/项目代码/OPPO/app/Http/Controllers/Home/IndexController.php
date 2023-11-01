<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //访问网站前台方法
    public function index(){
        //显示网站首页
        return view('Home.index');
    }
}
