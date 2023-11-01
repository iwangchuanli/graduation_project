<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class flinkController extends Controller
{
    //前台
    public function flink(Request $request){
       
        return view('/home/foot');

    }
}
