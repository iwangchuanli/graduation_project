<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class baseInfoSetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $uid =Session::get('uid');
        $result = DB::table('userinfo')
                    ->where('uid','=',$uid)
                    ->get();
                    
        
        return view('home.userinfo.baseInfoSet',['info'=>$result]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $uid = session::get('uid');

        $info['uid'] = $uid;
        $info['petname'] = $request->input('petname');
        $info['tname'] = $request->input('tname');
        $info['sex'] = $request->input('sex');
        $info['year'] = $request->input('year');
        $info['month'] = $request->input('month');
        $info['day'] = $request->input('day');
        $info['astro'] = $request->input('hidastro');

        //做个判断
        $has = DB::table('userinfo')
                    ->where('uid','=',$uid)
                    ->get();
        $arr = array();
        if($has == $arr){
             $result = DB::table('userinfo')
                    ->where('uid','=',$uid)
                    ->insert($info);
        }else{
            $result = DB::table('userinfo')
                    ->where('uid','=',$uid)
                    ->update($info);
        }


        
                  
        if($result){
            return success('/baseInfoSet','更改详情成功',1);
        }else{
            return error('/baseInfoSet','更改详情失败',3);
        }
    }

    public function account_security(){
        return view('home.userinfo.account_security');
    }
}
