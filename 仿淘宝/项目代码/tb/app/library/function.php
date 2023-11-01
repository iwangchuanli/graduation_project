<?php
	function success($url,$message='操作成功',$time=1){
		//调用模版
		return view('public.success',['url'=>$url,'message'=>$message,'time'=>$time*1000]);
	}
	function error($url,$message='操作失败',$time=1){
		//调用模版
		return view('public.error',['url'=>$url,'message'=>$message,'time'=>$time*1000]);
	}
?>