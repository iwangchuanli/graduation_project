<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
	/**后台管理操作******************************************************************************/
    //显示服务网点列表
    public function index(){
        //查询所有服务网点信息
		$result=DB::table('service')->Paginate(8);
        return view('Admin.Service.list',['result'=>$result]);
    }
	//体验店的更新操作
	public function update(Request $request){
		$result=$request->only('sname','saddress','sxiu','snumber','ssheng','sshi');
		$sid = $request->input('sid');		
		$result = DB::table('service')->where('sid','=',$sid)->update($result);
		$sort=$request->input('sort');
		$page=$request->input('page');
		//判断执行结果
		if($result){
			return success('/admin/service/list?sort='.$sort.'&page='.$page,'更新服务网点信息成功',1);
		}else{
			return error('/admin/service/list?sort='.$sort.'&page='.$page,'更新服务网点信息失败',1);
		}
    }
	public function delete(Request $request){
		$sid = $request->input('sid');
		//删除操作
		$result = DB::table('service')->where('sid','=',$sid)->delete();

		if($result){//删除成功 返回1
			echo 1;
		}else{//删除失败 返回0
			echo 0;
		}
	}
	//pencil操作
	public function pencil(Request $request){
		$sid = $request->input('sid');
		$result = DB::table('service')->where('sid','=',$sid)->first();		
		//json编码后返回
		return response()->json($result);
	}
    //添加服务网点界面
    public function add(){
        return view('Admin.Service.add');
    }
	//在添加服务网点界面添加操作
	public function insert(Request $request){
		$result = $request->only(['sname','saddress','sxiu','snumber','ssheng','sshi','sjing','swei']);
		//将数据插入数据库
		$result = DB::table('service')->insert($result);
		
		//判断是否插入成功
		if($result){
			return success('/admin/service/add','添加服务网点操作成功',1);
		}else{
			return error('/admin/service/add','添加服务网点操作失败',1);
		}
	}
    //查找体验店界面
		public function search(Request $request){
		//接收关键字
		$keywords = $request->input('key');
		
		$result=DB::table('service')
						->where('sid','=',$keywords)
						->orWhere('sname','like','%'.$keywords.'%')
						->orWhere('saddress','like','%'.$keywords.'%')
						->orWhere('sxiu','like','%'.$keywords.'%')
						->orWhere('snumber','like','%'.$keywords.'%')
						->orWhere('ssheng','like','%'.$keywords.'%')
						->orWhere('sshi','like','%'.$keywords.'%')
						->Paginate(8);
						
		//将查找体验店分配到模板中显示
		return view('Admin.Service.list',['result'=>$result]);
	}
	/**前台体验店遍历和详情操作***********************************************************************************/
	public function bian(Request $request){
		$ssheng = $request->input('ssheng');
		$sshi = $request->input('sshi');
		if(empty($ssheng)){
			$ssheng="北京市";
			$sshi="北京市";			
		}
		$sheng=DB::table('service')->lists('ssheng');
		$sheng=array_unique($sheng);
		foreach($sheng as $one){
			$shi = DB::table('service')
						->where('ssheng','=',$one)
						->lists('sshi');
			$shi=array_unique($shi);
			$city[$one]=$shi;
						
		}
		$jingwei=DB::table('service')
						->where('ssheng','=',$ssheng)
						->Where('sshi','=',$sshi)
						->first();
		$jing=$jingwei['sjing'];
		$wei=$jingwei['swei'];
		$address=DB::table('service')
						->where('ssheng','=',$ssheng)
						->Where('sshi','=',$sshi)
						->lists('saddress');
		$address=join(',',$address);
		//dd($city);
		$result=DB::table('service')
						->where('ssheng','=',$ssheng)
						->Where('sshi','=',$sshi)
						->get();
						
		return view('Home/service/map',['result'=>$result,'ssheng'=>$ssheng,'sshi'=>$sshi,'sheng'=>$sheng,'city'=>$city,'address'=>$address,'jing'=>$jing,'wei'=>$wei]);
	}

	
}