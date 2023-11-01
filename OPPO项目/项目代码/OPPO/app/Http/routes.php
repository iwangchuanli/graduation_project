<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



//前台登录路由
Route::group([],function(){
	
	//前台首页
	Route::get('/','Home\IndexController@index');
	
	//检测用户登录操
	Route::post('/index', 'Home\LoginController@index');
	//登录
	Route::get('/login',function(){
		return view('Home/login/login');
	});
	//退出登录
	Route::get('/outq','Home\LoginController@logout');
	//注册
	Route::get('/zhuce',function(){
		return view('Home/login/zhuce');
	});
	//注册操作
	Route::post('/add','Home\LoginController@add');
	 
	//找回密码操作
	Route::post('/zhao','Home\LoginController@zhao');
	//修改个人信息操作
	Route::post('/infoupdate','Home\LoginController@infoupdate');
	//更换个人头像界面
	Route::get('/face',function(){
		return view('Home/login/face');
	});
	//更换个人头像操作
	Route::post('/faceupdate','Home\LoginController@faceupdate');
	//显示个人信息页面
	Route::get('/userinfo','Home\LoginController@info');
		
});

//coloros页面
Route::group([],function(){
	Route::get('/coloros/index', function () {
		return view('Home/coloros/index');
	});
	Route::get('/coloros/overview', function () {
		return view('Home/coloros/overview');
	});
	Route::get('/coloros/clean', function () {
		return view('Home/coloros/clean');
	});
	Route::get('/coloros/clonephone', function () {
		return view('Home/coloros/clonephone');
	});
	Route::get('/coloros/clean', function () {
		return view('Home/coloros/clean');
	});
	Route::get('/coloros/design', function () {
		return view('Home/coloros/design');
	});
	Route::get('/coloros/light', function () {
		return view('Home/coloros/light');
	});
	Route::get('/coloros/save', function () {
		return view('Home/coloros/save');
	});

	Route::get('/coloros/contracted', function () {
		return view('Home/coloros/contracted');
	});

	Route::get('/coloros/clonephonestep', function () {
		return view('Home/coloros/clonephonestep');
	});

	
});
//主页路由
Route::group([],function(){
	Route::get('/Home/oppozhu/about', function () {
		return view('Home/oppozhu/about');
	});	 
	Route::get('/Home/oppozhu/605', function () {
		return view('Home/oppozhu/605');
	});
	Route::get('/dian', function () {
		return view('Home/oppozhu/dian');
	});
	Route::get('/about1', function () {
		return view('Home/oppozhu/about1');
	});
	Route::get('/blogs', function () {
		return view('Home/oppozhu/blogs');
	});
	Route::get('/blogs', function () {
		return view('Home/oppozhu/blogs');
	});

	Route::get('/sheying', function () {
		return view('Home/oppozhu/sheying');
	});
	Route::get('/video', function () {
		return view('Home/oppozhu/video');
	});
	 
});

//体验店路由
Route::group([],function(){
//前台体验店遍历
Route::get('/shops','Admin\TiyanController@bian');
	//查看体验店详情
	Route::get('/shops/tiyan','Admin\TiyanController@kan');
	//进入网站在前台页面显示友情链接操作的路由
	Route::get('/home/flink','Home\FlinkController@flink');

});
//订单购物车路由
Route::group([],function(){
//立即购买操作
Route::post('/panduan','Home\CartsController@panduan');	
	
	
//加入购物车操作
Route::get('/shopcar/add','Home\CartsController@add');

//展示购物车操作
Route::get('/shopcar','Home\CartsController@index');

//删除购物车操作
Route::get('/shopcart/delete','Home\CartsController@drop');

Route::post('/buy/begin','Home\CartsController@begin');

//修改购物车操作(+)
Route::get('/shopcar/addNum','Home\CartsController@addNum');

//修改购物车操作(-)
Route::get('/shopcar/jianNum','Home\CartsController@jianNum');
//****************************前台购物车操作结束********************************//

//****************************前台订单操作********************************//

//地址设为默认操作
Route::get('/address/setdef','Home\OrderController@setdef');

//订单收货地址操作
Route::get('/fillOrder','Home\OrderController@address');

//添加收获地址操作
Route::post('/address/insert','Home\OrderController@insert');

//has页面添加收获地址操作
Route::post('/address/reinsert','Home\OrderController@reinsert');

//优惠券界面
Route::get('/youhui',function(){
	return view('Home.shop/youhui');
});

//用户更新地址操作
Route::get('/order/address/update','Home\OrderController@update');

//删除地址操作
Route::get('/address/delete','Home\OrderController@delete');

//提交订单操作
Route::post('/order/add','Home\OrderController@add');

//支付页面
Route::get('/pay','Home\OrderController@pay');

//显示地址列表操作
Route::get('/address/index','Home\OrderController@index');

//显示地址列表操作
Route::get('/address/show','Home\OrderController@show');

//订单详情页面
Route::get('/orderXq','Home\OrderController@info');

//我的订单
Route::get('/order/orders','Home\OrderController@orders');
 
//***************************前台支付******************************//
//支付页面
Route::post('/order/alipay','Home\PayController@alipay');

	
});




//建立前台商品路由
Route::group([],function(){

	//前台产品界面
	Route::get('/shop/products','Home\GoodsController@products');

	//前台商品界面
	Route::get('/shop/index','Home\GoodsController@index');

	//前台手机商品详情界面
	Route::get('/shop/391','Home\GoodsController@phone');

	//前台手机配件详情界面
	Route::get('/shop/385','Home\GoodsController@phoneOther');

	//前台手机列表
	Route::get('/shop/goodslist','Home\GoodsController@goodslist');

	//前台手机查询
	Route::get('/shop/select','Home\GoodsController@select');

	//前台评论页面
	Route::get('/shop/evaluate','Home\GoodsController@add');

	//前台添加评论
	Route::post('/shop/insert','Home\GoodsController@insert');

});


/**服务部分路由******************************************************************/
//服务首页
Route::get('/service', function () {
    return view('Home/service/service');
});
//建议反馈
Route::get('/service/about', function () {
    return view('Home/service/about');
});
//服务站点
Route::get('/service/map','Admin\ServiceController@bian');
Route::get('/service/cha','Admin\ServiceController@cha');

//预约服务
Route::get('/service/yuyue', function () {
    return view('Home/service/yuyue');
});
//注册产品
Route::get('/service/vip', function () {
    return view('Home/service/vip');
});
//查询真伪
Route::get('/service/phonecheck', function () {
    return view('Home/service/phonecheck');
});
//手机升级
Route::get('/service/down', function () {
    return view('Home/service/down');
});
//购买帮助(开始)
Route::get('/service/270', function () {
    return view('Home/service/270');
});
Route::get('/service/290', function () {
    return view('Home/service/290');
});
Route::get('/service/300', function () {
    return view('Home/service/300');
});
Route::get('/service/320', function () {
    return view('Home/service/320');
});
Route::get('/service/330', function () {
    return view('Home/service/330');
});
Route::get('/service/634', function () {
    return view('Home/service/634');
});
Route::get('/service/596', function () {
    return view('Home/service/596');
});
Route::get('/service/597', function () {
    return view('Home/service/597');
});
Route::get('/service/598', function () {
    return view('Home/service/598');
});
Route::get('/service/635', function () {
    return view('Home/service/635');
});
Route::get('/service/310', function () {
    return view('Home/service/310');
});
Route::get('/service/350', function () {
    return view('Home/service/350');
});
Route::get('/service/360', function () {
    return view('Home/service/360');
});
//购买帮助(结束)
//服务政策
Route::get('/service/sdfgasdfg', function () {
    return view('Home/service/service');
});
//打假维权
Route::get('/service/614', function () {
    return view('Home/service/614');
});
//查看更多
Route::get('/service/product', function () {
    return view('Home/service/product');
});
Route::get('/service/buy', function () {
    return view('Home/service/buy');
});
Route::get('/service/fuwu', function () {
    return view('Home/service/fuwu');
});
Route::get('/service/410', function () {
    return view('Home/service/410');
});
Route::get('/service/420', function () {
    return view('Home/service/420');
});
Route::get('/service/480', function () {
    return view('Home/service/480');
});
Route::get('/service/430', function () {
    return view('Home/service/430');
});
Route::get('/service/440', function () {
    return view('Home/service/440');
});
Route::get('/service/450', function () {
    return view('Home/service/450');
});
Route::get('/service/460', function () {
    return view('Home/service/460');
});





 



//建立后台路由
//后台登录页面
Route::get('/admin','Admin\UserController@login');
Route::post('/admin/checkLogin','Admin\UserController@checkLogin');
Route::get('/vcode','Admin\UserController@vcode');
Route::get('/logout','Admin\UserController@logout');
Route::group(['middleware'=>'login'],function(){
	
	//	获得头像路由 
	Route::get('/getHeadPic','Admin\UserController@userHead');

	//后台首页
	Route::get('/admin/index','Admin\IndexController@index');

	/************************************************************/
	
	//个人信息界
	Route::get('/admin/user/detail','Admin\UserController@detail');
	
	//修改个人信息操作
	Route::post('/admin/user/updateinfo','Admin\UserController@updateinfo');
	
	//后台添加用户界面
	Route::get('/admin/user/add','Admin\UserController@add');
	//后台添加用户操作
	Route::post('/admin/user/insert','Admin\UserController@insert');

	//后台用户列表界面
	Route::get('/admin/user/list','Admin\UserController@index');
	//后台用户列表操作

	//后台查找用户操作
	Route::get('/admin/user/find','Admin\UserController@find');
	//后台查找用户界面
	Route::get('/admin/user/search','Admin\UserController@search');
	
	//后台更新用户界面操作
	Route::get('/admin/user/modify','Admin\UserController@modify');

	//后台修改用户操作
	Route::post('/admin/user/update','Admin\UserController@update');

	//后台删除用户操作
	Route::get('/admin/user/delete','Admin\UserController@delete');
	
	 
	//后台管理员管理界面
	Route::get('admin/user/admin','Admin\UserController@admin');
	
	//后台管理员修改操作
	Route::post('admin/user/adminupdate','Admin\UserController@adminupdate');
	
	//后台删除管理员操作
	Route::get('admin/user/admindelete','Admin\UserController@admindelete');
	
	
	//后台删除管理员操作
	Route::get('admin/user/adminfind','Admin\UserController@adminfind');
	
	//后台添加管理员界面
	Route::get('admin/user/adminadd','Admin\UserController@adminadd');
	
	//后台添加管理员操作
	Route::post('admin/user/admininsert','Admin\UserController@admininsert');
	
	
	/************************************************************/


	 


	 


	/************************************************************/
	 
/**后台体验店管理操作*********************************************************************/
	//列表界面
	Route::get('/admin/tiyan/list','Admin\TiyanController@index');
	//后台添加体验店界面
	Route::get('/admin/tiyan/add','Admin\TiyanController@add');	
	//后台添加体验店操作
	Route::post('/admin/tiyan/insert','Admin\TiyanController@insert');
	//后台修改体验店操作
	Route::get('/admin/tiyan/pencil','Admin\TiyanController@pencil');
	Route::post('/admin/tiyan/update','Admin\TiyanController@update');
	//后台删除体验店操作
	Route::get('/admin/tiyan/delete','Admin\TiyanController@delete');
	//后台查找体验店界面
	Route::get('/admin/tiyan/search','Admin\TiyanController@search');
	
	/**后台服务网点管理操作*********************************************************************/
	//列表界面
	Route::get('/admin/service/list','Admin\ServiceController@index');
	//后台添加服务网点界面
	Route::get('/admin/service/add','Admin\ServiceController@add');	
	//后台添加服务网点操作
	Route::post('/admin/service/insert','Admin\ServiceController@insert');
	//后台修改服务网点操作操作
	Route::get('/admin/service/pencil','Admin\ServiceController@pencil');
	Route::post('/admin/service/update','Admin\ServiceController@update');
	//后台删除服务网点操作
	Route::get('/admin/service/delete','Admin\ServiceController@delete');
	//后台查找服务网点界面
	Route::post('/admin/service/search','Admin\ServiceController@search');
	
	 
	
	
	/**后台友情链接操作**********************************************************/
	//后台添加友情链接界面
	Route::get('/admin/link/add','Admin\LinkController@add');
	//后台添加友情链接操作
	Route::post('/admin/link/insert','Admin\LinkController@insert');
	//后台友情链接列表界面
	Route::get('/admin/link/list','Admin\LinkController@index');
	//后台查找友情链接界面
	Route::get('/admin/link/search','Admin\LinkController@search');
	//后台修改友情链接操作
	Route::get('/admin/link/pencil','Admin\LinkController@pencil');
	Route::post('/admin/link/update','Admin\LinkController@update');
	//后台删除友情链接操作
	Route::get('/admin/link/delete','Admin\LinkController@delete');
	
	
	/**网站管理**********************************************************/
	//网站管理首页
	Route::get('/admin/web','Admin\SetController@index');
	//网站配置更新
	Route::post('/admin/web/update','Admin\SetController@update');
	
	 
	/************************************************************/
	
	//后台添加商品界面
	Route::get('/admin/goods/add','Admin\GoodsController@add');
	//后台添加商品操作
	Route::post('/admin/goods/insert','Admin\GoodsController@insert');

	//后台商品列表界面
	Route::get('/admin/goods/list','Admin\GoodsController@index');
	//后台商品列表操作


	//后台查找商品界面
	Route::get('/admin/goods/search','Admin\GoodsController@search');
	//后台查找商品操作
	Route::get('/admin/goods/find','Admin\GoodsController@find');

	//后台修改商品界面
	Route::get('/admin/goods/modify','Admin\GoodsController@modify');
	//后台修改商品操作
	Route::post('/admin/goods/update','Admin\GoodsController@update');

	//后台删除商品操作
	Route::get('/admin/goods/delete','Admin\GoodsController@delete');

  
	/************************************************************/

	//后台添加商品图片界面
	Route::get('/admin/imgs/add','Admin\ImgsController@add');
	//后台添加商品图片操作
	Route::post('/admin/imgs/insert','Admin\ImgsController@insert');

	//后台商品图片列表界面
	Route::get('/admin/imgs/list','Admin\ImgsController@index');
	//后台商品图片列表操作


	//后台查找商品图片界面
	Route::get('/admin/imgs/search','Admin\ImgsController@search');
	//后台查找商品图片操作
	Route::get('/admin/imgs/find','Admin\ImgsController@find');

	//后台修改商品图片界面
	Route::get('/admin/imgs/modify','Admin\ImgsController@modify');
	//后台修改商品图片操作
	Route::post('/admin/imgs/update','Admin\ImgsController@update');

	//后台删除商品图片操作
	Route::get('/admin/imgs/delete','Admin\ImgsController@delete');


	/************************************************************/

	
	//后台添加评价界面
	Route::get('/admin/evaluate/add','Admin\EvaluateController@add');
	//后台添加评价操作
	Route::post('/admin/evaluate/insert','Admin\EvaluateController@insert');

	//后台评价列表界面
	Route::get('/admin/evaluate/list','Admin\EvaluateController@index');
	//后台评价列表操作


	//后台查找评价界面
	Route::get('/admin/evaluate/search','Admin\EvaluateController@search');
	//后台查找评价操作
	Route::get('/admin/evaluate/find','Admin\EvaluateController@find');

	//后台修改评价界面
	Route::get('/admin/evaluate/modify','Admin\EvaluateController@modify');
	//后台修改评价操作
	Route::post('/admin/evaluate/update','Admin\EvaluateController@update');

	//后台删除评价操作
	Route::get('/admin/evaluate/delete','Admin\EvaluateController@delete');

	/************************************************************/
	
	/****************************#####后台订单开始#####********************************/
	
	//后台添加订单操作
	Route::post('admin/order/insert','Admin\OrderController@insert');
	
	//后台添加订单界面
	Route::get('/admin/order/add','Admin\OrderController@add');
	
	//后台订单列表界面
	Route::get('/admin/order/list','Admin\OrderController@index');
	
	//更改订单操作(发货)
	Route::get('/admin/order/send','Admin\OrderController@send');
	
	//订单详情
	Route::get('/admin/order/info','Admin\OrderController@info');
	
	//修改订单
	Route::get('/admin/order/modify','Admin\OrderController@modify');
	
	//修改订单操作
	Route::post('/admin/order/update','Admin\OrderController@update');

	//后台查找订单界面(当前页面)
	Route::get('/admin/order/find','Admin\OrderController@find');
	
	//后台查找订单界面
	Route::get('/admin/order/search','Admin\OrderController@search');
	
	//后台查找订单操作
	Route::post('/admin/order/finds','Admin\OrderController@finds');
	
	//后台删除订单操作
	Route::get('/admin/order/delete','Admin\OrderController@delete');

	/*****************************###后台订单结束###*******************************/
	
		
		
	/*****************************###后台购物车开始###*******************************/

	//后台购物车列表界面
	Route::get('/admin/shopcar/list','Admin\ShopcarController@index');
	//后台购物车列表操作


	//后台查找购物车界面
	Route::get('/admin/shopcar/search','Admin\ShopcarController@search');
	//后台查找购物车操作
	Route::get('/admin/shopcar/find','Admin\ShopcarController@find');

	//后台修改购物车界面
	Route::get('/admin/shopcar/modify','Admin\ShopcarController@modify');
	//后台修改购物车操作
	Route::post('/admin/shopcar/update','Admin\ShopcarController@update');

	//后台删除购物车操作
	Route::get('/admin/shopcar/delete','Admin\ShopcarController@delete');
	
	/****************************###后台购物车结束###********************************/
	

	/******************************支付列表开始******************************/
	//支付列表
	Route::get('/admin/payinfo','Admin\PayController@payinfo');
	
	//支付详情
	Route::get('/admin/pay/detail','Admin\PayController@detail');
	
	//查找支付订单
	Route::get('/admin/pay/find','Admin\PayController@find');
	
	/*************************************支付列表结束*****************************************/
	
	/********************************地址列表****************************/
	
	Route::get('/admin/address/index','Admin\AddressController@index');
	
	//修改地址
	Route::get('/admin/address/modify','Admin\AddressController@modify');
	
	//更改地址操作
	Route::post('/admin/address/update','Admin\AddressController@update');
	
	//删除地址操作
	Route::get('/admin/address/delete','Admin\AddressController@delete');
	//添加地址页面
	Route::get('/admin/address/add',function(){
		return view('Admin/address/add');
	});
	//添加地址操作 
	Route::post('/admin/address/insert','Admin\AddressController@insert');
	
	//查找地址页面
	Route::get('/admin/address/search',function(){
		return view('Admin/address/search');
	});
	
	//查找地址操作
	Route::get('/admin/address/find','Admin\AddressController@find');
	
	/************************************************************/

});
























