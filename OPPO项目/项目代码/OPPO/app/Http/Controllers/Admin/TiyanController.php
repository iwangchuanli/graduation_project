<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TiyanController extends Controller
{
	/**后台管理操作******************************************************************************/
    //显示友情链接列表
    public function index(){
        //查询所有体验店信息
		$result=DB::table('tiyan')->Paginate(8);
        return view('Admin.Tiyan.list',['result'=>$result]);
    }
	//体验店的更新操作
	public function update(Request $request){
		$result=$request->only('tname','turl','ttype','taddress','tnumber','tsheng','tshi');
		$tid = $request->input('tid');		
		$result = DB::table('tiyan')->where('tid','=',$tid)->update($result);
		$sort=$request->input('sort');
		$page=$request->input('page');
		//判断执行结果
		if($result){
			return success('/admin/tiyan/list?sort='.$sort.'&page='.$page,'更新体验店信息成功',1);
		}else{
			return error('/admin/tiyan/list?sort='.$sort.'&page='.$page,'更新体验店信息失败',1);
		}
    }
	public function delete(Request $request){
		//接收体验店id
		$tid = $request->input('tid');
		//删除操作
		$result = DB::table('tiyan')->where('tid','=',$tid)->delete();

		if($result){//删除成功 返回1
			echo 1;
		}else{//删除失败 返回0
			echo 0;
		}
	}
	//友情链接pencil操作
	public function pencil(Request $request){
		//获取体验店id
		$tid = $request->input('tid');
		//查询体验店信息
		$result = DB::table('tiyan')->where('tid','=',$tid)->first();		
		//json编码后返回
		return response()->json($result);
	}
    //添加体验店界面
    public function add(){
        return view('Admin.Tiyan.add');
    }
	//在添加体验店界面添加操作
	public function insert(Request $request){
		$result = $request->only(['tname','turl','ttype','taddress','tnumber','tsheng','tshi','tjing','twei']);
		//将数据插入数据库
		$result = DB::table('tiyan')->insert($result);
		
		//判断是否插入成功
		if($result){
			return success('/admin/tiyan/add','添加体验店操作成功',1);
		}else{
			return error('/admin/tiyan/add','添加体验店操作失败',1);
		}
	}
    //查找体验店界面
		public function search(Request $request){
		//接收关键字
		$keywords = $request->input('key');
		
		$result=DB::table('tiyan')
						->where('tid','=',$keywords)
						->orWhere('tname','like','%'.$keywords.'%')
						->orWhere('turl','like','%'.$keywords.'%')
						->orWhere('ttype','like','%'.$keywords.'%')
						->orWhere('taddress','like','%'.$keywords.'%')
						->orWhere('tnumber','like','%'.$keywords.'%')
						->orWhere('tsheng','like','%'.$keywords.'%')
						->orWhere('tshi','like','%'.$keywords.'%')
						->Paginate(8);
						
		//将查找体验店分配到模板中显示
		return view('Admin.Tiyan.list',['result'=>$result]);
	}
	/**前台体验店遍历和详情操作***********************************************************************************/
	public function bian(Request $request){
		$keywords = $request->input('key');
		if(empty($keywords)){
			$keywords="北京市";
		}
		$number=DB::table('tiyan')
						->where('ttype','=',$keywords)
						->orWhere('taddress','like','%'.$keywords.'%')
						->orWhere('tshi','like','%'.$keywords.'%')
						->count();
		$result=DB::table('tiyan')
				->where('ttype','=',$keywords)
				->orWhere('taddress','like','%'.$keywords.'%')
				->orWhere('tshi','like','%'.$keywords.'%')
				->Paginate(5);
		$address=DB::table('tiyan')
				->where('ttype','=',$keywords)
				->orWhere('taddress','like','%'.$keywords.'%')
				->orWhere('tshi','like','%'.$keywords.'%')
				->lists('taddress');	
		$a=join(",",$address);
		//var_dump($a);
		$shi=DB::table('tiyan')
				->where('ttype','=',$keywords)
				->orWhere('taddress','like','%'.$keywords.'%')
				->orWhere('tshi','like','%'.$keywords.'%')
				->first();
		$shi=$shi['tshi'];
		$jingwei=DB::table('tiyan')
					->where('tshi','=',$shi)
					->first();
		$jing=$jingwei['tjing'];
		$wei=$jingwei['twei'];
		return view('Home/oppozhu/shops',['number'=>$number,'result'=>$result,'a'=>$a,'shi'=>$shi,'jing'=>$jing,'wei'=>$wei]);
	}
	public function kan(Request $request){
		$turl='/shops/tiyan?tid='.$request->input('tid');
		$result=DB::table('tiyan')->where('turl','=',$turl)->first();
		return view('Home/oppozhu/1000',['result'=>$result]);
	}
}
