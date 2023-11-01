<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //访问网站后台方法
	public function index(){
		//显示网站首页
		return view('admin.index');
	}
	
	 
}
