<?php
namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SellerController extends Controller
{
	//卖家中心界面
    public function istore(){
		return view('seller\istore');
	}
	//获取所有商品父类
	public function auction(){
		$pclass=DB::table('goodsclass')->select('gcid','gcname')->where('ispclass','=',1)->get();
		$ctree=DB::table('goodsclass')->select('gcid','gcname')->where('ispclass','=',1)->get();
		foreach($ctree as $key=>$pc){
			$ctree[$key]['sc']=DB::table('goodsclass')->select('gcid','gcname')->where('pcid','=',$pc['gcid'])->get();
			foreach($ctree[$key]['sc'] as $k=>$brand){
				$ctree[$key]['sc'][$k]['brand']=DB::table('brand')->select('brid','brname')->where('gcid','=',$brand['gcid'])->get();
			}
		}
		$ctree=json_encode($ctree);
		return view('seller\auction',['pclass'=>$pclass,'ctree'=>$ctree]);
	}
	//上架所有商品
	public function upload(Request $request){
		$cid = $request->input('cid');
		$cname = $request->input('cname');
		$cidarr=explode(',',$cid);//父类  子类  品牌
		$cnamearr=explode(',',$cname);
		
		//查询该子类对应品牌 选中默认品牌 可以更换品牌
		$brand=DB::table('brand')->select('brid','brname')->where('gcid','=',$cidarr[1])->get();
		//查询该类对应销售属性并组合其属性值
		$salearr=DB::table('attname')->select('atnid','atnname')->where('gcid','=',$cidarr[1])->where('issale','=','true')->orderBy('atnid')->get();
		foreach($salearr as $k=>$sa){
			$salearr[$k]['sav']=DB::table('attvalue')->select('atvid','atvname')->where('atnid','=',$sa['atnid'])->get();
		}
		//查询该类对应的普通属性并组合其属性值
		$norarr=DB::table('attname')->select('atnid','atnname')->where('gcid','=',$cidarr[1])->where('issale','=','false')->orderBy('atnid')->get();
		foreach($norarr as $key=>$nor){
			$norarr[$key]['nor']=DB::table('attvalue')->select('atvid','atvname')->where('atnid','=',$nor['atnid'])->get();
		}
		return view('seller\upload',['cidarr'=>$cidarr,'cnamearr'=>$cnamearr,'brand'=>$brand,'salearr'=>$salearr,'norarr'=>$norarr]);
		
	}
	public function shelves(Request $request){
		//在session获取用户id
		$uid=$request->session()->get('uid');
		//获取宝贝标题
		$gname=$request->input('title');
		//接收宝贝所属类别
		$gcid=$request->input('gcid');
		//接受宝贝列表价
		$listprice=$request->input('listprice');
		//接收宝贝货号
		$ghuohao=$request->input('ghuohao');
		//接收宝贝品牌id
		$brid=$request->input('brid');
		//接收基本属性数组
		$basearr=$request->input('basearr');
		//接收sku数组
		$skuArr=$request->input('skuArr');
		$time=time();
		//将数据插入商品表,并且获得商品id
		$gid = DB::table('goods')->insertGetId(['uid'=>$uid,'gname'=>$gname,'gcid'=>$gcid,'listprice'=>$listprice,'ghuohao'=>$ghuohao,'brid'=>$brid,'gaddtime'=>$time]);
		//将数据插入sku表
		foreach($skuArr as $sku){
			$skuid=DB::table('sku')->insertGetId(['gid'=>$gid,'skustr'=>$sku[0],'skuname'=>$sku[1],'skuprice'=>$sku[2],'skucount'=>$sku[3],'skuaddtime'=>$time]);
			//切割sku字符串  将sku属性存入基本属性表 sku[0]
			$skustrarr = explode(';',$sku[0]);
			foreach($skustrarr as $skuattr){
				$skue=explode(':',$skuattr);
				$atnid=$skue[0];
				$atvid=$skue[1];
				DB::table('baseattr')->insert(['gid'=>$gid,'atnid'=>$atnid,'atvid'=>$atvid,'issku'=>1,'skuid'=>$skuid,'baseattrtime'=>$time]);
			}
			
		}
		//将基本属性插入基本属性表 baseattr
		foreach($basearr as $base){
			DB::table('baseattr')->insert(['gid'=>$gid,'atnid'=>$base[0],'atvid'=>$base[1],'issku'=>0,'skuid'=>0,'baseattrtime'=>$time]);
		}
		
		if($gid){
			echo 1;
		}else{
			echo 0;
		}
	}
}
