<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class FlinkController extends Controller
{
    
	public function flink(Request $request){
		$flink=DB::table('flink')->get();
		// echo '<pre>';
		// var_dump($flink);
		return $flink;
	}
}
