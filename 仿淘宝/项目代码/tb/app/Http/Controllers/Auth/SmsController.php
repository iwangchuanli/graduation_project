<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Library\Sms;


class SmsController extends Controller
{


    public function sendms(Request $request){


        $sms = new Sms( array('api_key' => 'd19368bbe3fadaebe4f1832974f4cc6d' , 'use_ssl' => FALSE ) );
        $num = mt_rand(100000,999999);
        $request->session()->put('code',$num);
        $phone = $request->input('uphone');
        //返回验证码做测试
        //return response()->json($num);
        //send 单发接口，签名需在后台报备
        $res = $sms->send( $phone, '亲爱的用户,您好,您的验证码为'.$num.',如若不是本人,请忽略此信息.【lamp158】');
        if( $res ){
            if( isset( $res['error'] ) &&  $res['error'] == 0 ){
                return response()->json( 'success');
            }else{
                return response()->json('发送失败,错误代码:'.$res['error'].',错误信息:'.$res['msg']);
            }
        }else{
            return response()->json( $sms->last_error() );
        }

    }

    public function elsems(){

        $sms = new Sms( array('api_key' => 'd19368bbe3fadaebe4f1832974f4cc6d' , 'use_ssl' => FALSE ) );
        $res = $sms->get_deposit();
        if( $res ){
            if( isset( $res['error'] ) &&  $res['error'] == 0 ){
                return response()->json('desposit:'.$res['deposit']);
            }else{
                return response()->json('failed,code:'.$res['error'].',msg:'.$res['msg']);
            }
        }else{
           return response()->json( $sms->last_error() );
        }

    }

}
