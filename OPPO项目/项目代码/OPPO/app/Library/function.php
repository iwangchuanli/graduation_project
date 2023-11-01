<?php

	
	//进程成功操作的跳转函数
	function success($url,$message='操作成功',$time=1){
		//调用模板
		return view('public.success',['url'=>$url,'message'=>$message,'time'=>$time*1000]);
		
	}
	
	//进程成功操作的跳转函数
	function error($url,$message='操作失败',$time=3){
		//调用模板
		return view('public.error',['url'=>$url,'message'=>$message,'time'=>$time*1000]);
		
	}