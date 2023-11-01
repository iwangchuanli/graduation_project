<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AddressController extends Controller
{	
	
	//显示地址列表
    public function index(){
		//查询数据库
		$address = DB::table('address')->get();
		if(!empty($address)){
			return view('Admin.Address.index',['address'=>$address]);
		}else{
			return view('Admin.Address.null');
		}
	}
	
	//更改地址
	 public function modify(Request $request){
		 //接受
		 $aid = $request->input('aid');
		//查询数据库
		$address = DB::table('address')->where('aid','=',$aid)->first();
		if($address){
			return response()->json($address);
		}
	}
	
	//更改地址操作
	 public function update(Request $request){
		 //接受
		 $aid = $request->input('aid');
		 $name = $request->input('name');
		 $address = $request->input('address');
		 $utel = $request->input('utel');
		 $uemail = $request->input('uemail');
		//更新数据库
		$success = DB::table('address')->where('aid','=',$aid)->update(['name'=>$name,'address'=>$address,'utel'=>$utel,'uemail'=>$uemail]);
		if($success){
			return redirect('/admin/address/index');
		}
	}
	
	//删除地址操作
	public function delete(Request $request){
		//接受
		$aid = $request->input('aid');
		
		//删除操作
		$del = DB::table('address')->where('aid','=',$aid)->delete();
		if($del){
			echo 1;
		}else{
			echo 0;
		}
	}
	
	//添加地址操作
	public function insert(Request $request){
    	/*$uid= $request->input('uid');
    	$name = $request->input('name');
		$uemail=$request->input('uemail');
		$utel=$request->input('utel');
		$address=$request->input('address');*/
    	//获取插入的信息
		$address= $request->only(['uid','uemail','utel','address','name']);
		 
		//将用户数据插入数据库
		$result = DB::table('address')
						->insert($address);
						 
						
		//判断用户是否插入成功
		if($result){
			return redirect('admin/address/index');
		}else{
			//return'插入用户失败';
			return error('/admin/address/add','添加地址失败',3);
		}
	}
	

    //查找商品操作
    public function find(Request $request){
        //接收关键字
        $keywords = $request->input('key');
        
        $address=DB::table('address')
                        ->where('aid','=',$keywords)
						->orWhere('uid','like','%'.$keywords.'%')
                        ->orWhere('name','like','%'.$keywords.'%')
                        ->paginate(10);

        return view('/Admin/address/index',['address'=>$address]); 
      }

	
}
