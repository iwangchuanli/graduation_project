<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
class IndexController extends Controller
{
    //访问网站后台方法
    public function index(Request $request){
		 //查询用户信息
		$result=DB::table('user')
						->select('uid','uname','time','endtime','rid')
						 
						->first();
			return view('Admin.index',['result'=>$result]);
    }
}
