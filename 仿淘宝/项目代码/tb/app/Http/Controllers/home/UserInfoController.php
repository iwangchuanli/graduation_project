<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use DB;
use session;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

       
        return view('home.userinfo.userinfo');
    }
    public function deliver_address(Request $request)
    {

        if(!session('uname')){

            return redirect()->route('/login');
        }
        $info['uname']=session('uname');
        $info['uphone']=session('uphone');
        $info['head']=session('head');
        $info['uid']=session('uid');

        $result = DB::table('userinfo')
                    ->select('petname','sex','tname')
                    ->where('uid','=',$info['uid'])
                    ->first();
        $info['petname']=$result['petname'];
        $info['sex']=$result['sex'];
        $info['tname']=$result['tname'];
        // 地址栏
        $address = DB::table('address')
                    ->where('uid','=',$info['uid'])
                    ->get();

        $info['address']=$address;

     

        //dd($info);

        return view('home.userinfo.deliver_address',['info'=>$info]);
    }

    // public function checkAddress()
    // {
    //     $result=DB::table('address')
    //                 ->where('uid','=',$uid)
    //                 ->count();

    //     if ($result>10) {
    //        return error()
    //     }
    // }

    public function checkAddress(Request $request)
    {
        //dd($request);
        $info['area'] = $request->input('area');
        $info['faddress'] = $request->input('addressDetail');
        $info['zcode'] = $request->input('post');
        $info['gname'] = $request->input('fullName');
        $info['gphone'] = $request->input('mobile');
        $info['uid'] = session('uid');
        $info['def'] = $request->input('defaultAddress');
        if($info['def'] == null){
            $info['def'] = 0;
            $num = DB::table('address')
                    ->insertGetId($info);
        }elseif ($info['def'] == 'on') {
            $info['def'] = 1;
            $num = DB::table('address')
                    ->insertGetId($info);
            $result = DB::table('address')
                        ->where('uid',$info['uid'])
                        ->update(['def'=>0]);
            $result = DB::table('address')
                        ->where('aid','=',$num)
                        ->update(['def'=>1]);
        }

        if($num){
                return success('/deliver_address','添加地址成功',1);
        }else{
               
                return error('/deliver_address','添加地址失败',3);
        }
    }   

    public function adef(Request $request,$aid)
    {
        $info['uid'] = session('uid');
        

        if(!empty($aid) && !empty($info['uid'])){

            $result = DB::table('address')
                        ->where('uid',$info['uid'])
                        ->update(['def'=>0]);
            $result = DB::table('address')
                        ->where('aid','=',$aid)
                        ->update(['def'=>1]);

                return redirect('/deliver_address');
            }else{
               
                return error('/deliver_address','添加地址失败',3);
        }                
    }

    public function modf($aid)
    {
        $result = DB::table('address')
                    ->where('aid','=',$aid)
                    ->get();
        
        return redirect('/deliver_address/'.$aid,['info'=>$result]);
    }

    public function del($aid)
    {
        $result = DB::table('address')
                    ->where('aid','=',$aid)
                    ->delete();
        if($result){
           echo 1;
        }else{
          echo 0;
        }
    }

    public function daddress(Request $request,$aid)
    {

        $info['uname']=session('uname');
        $info['uphone']=session('uphone');
        $info['head']=session('head');
        $info['uid']=session('uid');

        $result = DB::table('userinfo')
                    ->select('petname','sex','tname','year','month','day')
                    ->where('uid','=',$info['uid'])
                    ->first();
        $info['petname']=$result['petname'];
        $info['sex']=$result['sex'];
        $info['tname']=$result['tname'];
        $info['year']=$result['year'];
        $info['month']=$result['month'];
        $info['day']=$result['day'];

        // 地址栏
        $address = DB::table('address')
                    ->where('uid','=',$info['uid'])
                    ->get();

        $info['address']=$address;

        $modf = DB::table('address')
                    ->where('aid','=',$aid)
                    ->first();

        //dd($modf);

        return view('home.userinfo.daddress',['info'=>$info,'modf'=>$modf,'aid'=>$aid]);
    }


     public function aupdate(Request $request,$aid)
    {
        //dd($request);
        $info['area'] = $request->input('area');
        $info['faddress'] = $request->input('addressDetail');
        $info['zcode'] = $request->input('post');
        $info['gname'] = $request->input('fullName');
        $info['gphone'] = $request->input('mobile');
        $info['uid'] = session('uid');
        $info['def'] = $request->input('defaultAddress');
        if($info['def'] == null){
            $info['def'] = 0;
            $affected = DB::table('address')
            ->where('aid','=',$aid)
            ->update(['uid'=>$info['uid'],'def'=>$info['def'],'area'=>$info['area'],'faddress'=>$info['faddress'],'zcode'=>$info['zcode'],'gname'=>$info['gname'],'gphone'=>$info['gphone'],'def'=>$info['def']]);



        }elseif ($info['def'] == 'on') {
            $info['def'] = 1;
            $affected = DB::table('address')
            ->where('aid','=',$aid)
            ->update(['uid'=>$info['uid'],'def'=>$info['def'],'area'=>$info['area'],'faddress'=>$info['faddress'],'zcode'=>$info['zcode'],'gname'=>$info['gname'],'gphone'=>$info['gphone']]);
            $result = DB::table('address')
                        ->where('uid',$info['uid'])
                        ->update(['def'=>0]);
            $result = DB::table('address')
                        ->where('aid','=',$aid)
                        ->update(['def'=>1]);
        }

        if($affected){
                return success('/deliver_address','更新地址成功',1);
        }else{
               
                return error('/deliver_address','更新地址失败',3);
        }
    }   

}
