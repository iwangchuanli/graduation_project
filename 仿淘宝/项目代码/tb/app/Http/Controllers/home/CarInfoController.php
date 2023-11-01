<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CarInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function info(Request $request)
    {
        //
        $uid=$request->session()->get('uid');
        $result = DB::table('cart')
                    ->join('goods', 'cart.gid', '=', 'goods.gid')
                    ->join('picture', 'cart.gid', '=', 'picture.gid')
                        ->where('cart.uid','=',$uid)
                        ->where('picture.ismain','=','1')
                        ->select('goods.gname','goods.listprice','picture.purl','goods.gid')
                        ->get();
        $info = json_encode($result);
        echo $info;
    }
    

    
}
