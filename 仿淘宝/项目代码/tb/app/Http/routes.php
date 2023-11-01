<?php

Route::get('/', function(){

	return view('/home/index');
    
});
//后台登录路由
Route::get('/admin/login','Admin\LoginController@login');
Route::post('/admin/checkLogin','Admin\LoginController@checkLogin');
//后台退出路由
Route::get('/admin/logout','Admin\LoginController@logout');
Route::get('/seller/auction',function(){
	
	return view('/seller/auction');
});

//建立后台路由
Route::group(['middleware'=>'login','prefix'=>'admin'],function(){
	//后台首页
	Route::get('index','Admin\IndexController@index');
	//后台网站配置列表
	Route::get('config/index','Admin\ConfigController@index');
	//后台网站配置修改界面
	Route::get('config/modify','Admin\ConfigController@modify');
	//后台网站配置修改操作
	Route::post('config/update','Admin\ConfigController@update');


	//权限管理列表
	Route::get('permission/index','Admin\PermisController@index');
	//角色添加界面
	Route::get('permission/add','Admin\PermisController@add');
	//角色添加操作
	Route::post('permission/insert','Admin\PermisController@insert');
	//权限添加界面
	Route::get('permission/adds','Admin\PermisController@adds');
	//权限添加操作
	Route::post('permission/inserts','Admin\PermisController@inserts');
	//用户角色修改界面
	Route::get('permission/update','Admin\PermisController@update');
	//用户角色修改操作
	Route::post('permission/modify','Admin\PermisController@modify');

	//用户权限修改界面
	Route::get('permission/updater','Admin\PerController@updater');
	//用户权限修改操作
	Route::post('permission/modifyr','Admin\PerController@modifyr');

	//权限修改界面C
	Route::get('permission/updatep','Admin\PerController@updatep');
	//权限修改操作C
	Route::post('permission/modifyp','Admin\PerController@modifyp');
	//角色删除操作
	Route::get('permission/delete','Admin\PermisController@delete');
	//权限删除操作
	Route::get('permission/pdelete','Admin\PerController@pdelete');


	//后台用户列表
	Route::get('user/index','Admin\UserController@index');
	//后台添加用户界面
	Route::get('user/add','Admin\UserController@add');

	//后台添加用户操作
	Route::post('user/insert','Admin\UserController@insert');
	//后台搜索界面
	Route::get('user/find','Admin\UserController@find');
	//删除用户操作
	Route::get('user/delete','Admin\UserController@delete');
	//更新用户界面
	Route::get('user/modify','Admin\UserController@modify');
	//更新用户操作
	Route::post('user/update','Admin\UserController@update');
	//用户搜索界面
	Route::get('user/search','Admin\UserController@search');
	//商品分类界面
	Route::get('goodsclass/index','Admin\GoodsClassController@index');
	//添加商品分类界面
	Route::get('goodsclass/add','Admin\GoodsClassController@add');
	//添加商品分类操作
	Route::get('goodsclass/insert','Admin\GoodsClassController@insert');
	//显示父类对应子类页面
	Route::get('goodsclass/getsclass','Admin\GoodsClassController@getsclass');
	//所有商品子类界面
	Route::get('goodsclass/scindex','Admin\GoodsClassController@scindex');
	//修改分类界面(其实就修改个名字)
	Route::get('goodsclass/modify','Admin\GoodsClassController@modify');
	//修改分类操作
	Route::post('goodsclass/update','Admin\GoodsClassController@update');
	//删除分类操作
	Route::get('goodsclass/delete','Admin\GoodsClassController@delete');
	//商品属性
	//添加商品属性名界面
	Route::get('attname/add','Admin\AttNameController@add');
	//添加商品属性名操作
	Route::get('attname/insert','Admin\AttNameController@insert');
	//商品属性名列表
	Route::get('attname/index','Admin\AttNameController@index');
	//商品属性名删除
	Route::get('attname/delete','Admin\AttNameController@delete');
	//属性值添加界面
	Route::get('attvalue/add','Admin\AttValueController@add');
	//属性值添加操作
	Route::get('attvalue/insert','Admin\AttValueController@insert');
	//属性值列表界面
	Route::get('attname/nvindex','Admin\AttValueController@nvindex');
	//属性值删除操作
	Route::get('attvalue/delete','Admin\AttValueController@delete');
	//所有属性值界面(应该没人会这样进)
	Route::get('attvalue/vindex','Admin\AttValueController@vindex');	

	//后台图片列表
	Route::get('img/index','Admin\ImgController@index');
	Route::get('img/hompg','Admin\ImgsController@hompg');
	//添加图片页面
	Route::get('img/add','Admin\ImgController@add');
	Route::get('img/append','Admin\ImgsController@append');
	//添加图片操作
	Route::post('img/insert','Admin\ImgController@insert');
	Route::post('img/rinsert','Admin\ImgsController@rinsert');
	//修改图片界面
	Route::get('img/modify','Admin\ImgController@modify');
	Route::get('img/change','Admin\ImgsController@change');
	//后台修改图片操作
	Route::post('img/update','Admin\ImgController@update');
	Route::post('img/renew','Admin\ImgsController@renew');
	//后台删除图片操作
	Route::get('img/delete','Admin\ImgController@delete');
	Route::get('img/cut','Admin\ImgsController@cut');
});

	//友情链接列表
	Route::get('/admin/flink/index','admin\flinkController@index');
	//添加友情链接
	Route::get('/admin/flink/add','admin\flinkController@add');
	//添加友链操作
	Route::post('/admin/flink/insert','admin\flinkController@insert');
	//删除链接操作
	Route::get('/admin/flink/delete','admin\flinkController@delete');
	//更新链接界面
	Route::get('/admin/flink/modify','Admin\flinkController@modify');
	//更新链接操作
	Route::post('/admin/flink/update','admin\flinkController@update');
	//查找链接
	Route::get('/admin/flink/find','Admin\flinkController@find');
	//查找操作
	Route::post('/admin/flink/search','admin\flinkController@search');
	//链接上线
	Route::get('/admin/flink/lineup','admin\flinkController@lineup');
	//链接下线
	Route::get('/admin/flink/linedown','admin\flinkController@linedown');
	//品牌分类
	Route::get('/admin/brand/index','admin\brandController@index');
	//添加品牌分类
	Route::get('/admin/brand/add','admin\brandController@add');
	//添加品牌分类操作
	Route::post('/admin/brand/insert','admin\brandController@insert');
	//删除品牌操作
	Route::get('/admin/brand/delete','admin\brandController@delete');
	//查找链接
	Route::get('/admin/brand/find','admin\brandController@find');
	//查找操作
	Route::post('/admin/brand/search','admin\brandController@search');


//前台登录
Route::get('/login','Home\LoginController@login');
//退出
Route::get('/logout','Home\LoginController@logout');
//前台登录验证
Route::post('/home/checkLogin','Home\LoginController@checkLogin');
//前台注册页面
Route::get('/r_one','Home\RegisterController@r_one');
//验证短信验证码
Route::post('/checkcode','Home\RegisterController@checkcode');
//注册后续页面
Route::group(['middleware'=>'register'],function(){
//注册密码
Route::get('/r_two','Home\RegisterController@r_two');
//检验注册信息
Route::post('/checkRegister','Home\RegisterController@checkRegister');
});

//注册成功
Route::get('/r_three','Home\RegisterController@r_three');

//我的淘宝
Route::group(['middleware'=>'userinfo'],function(){
	//个人详情页
	Route::get('/userinfo','Home\UserInfoController@index');
	//收货地址
	Route::get('/deliver_address','Home\UserInfoController@deliver_address');
	//验证并添加收货地址
	Route::post('/checkAddress','Home\UserInfoController@checkAddress');
	//验证并更新收货地址
	Route::post('/aupdate/{aid}','Home\UserInfoController@aupdate');
	//更新收货地址默认值
	Route::get('/adef/{aid}','Home\UserInfoController@adef');
	//修改收货地址页面
	Route::get('/deliver_address/{aid}','Home\UserInfoController@daddress');
	//删除收货地址
	Route::get('/adef/del/{aid}','Home\UserInfoController@del');
	//基本信息主页
	Route::get('/baseInfoSet','Home\baseInfoSetController@index');
	//基本信息保存
	Route::post('/baseInfoSet/store','Home\baseInfoSetController@store');
	//安全等级主页
	Route::get('/baseInfoSet/index','Home\baseInfoSetController@account_security');
	//收藏信息显示
	//店铺收藏
	Route::get('/collect','Home\CollectController@collect');
	//物品收藏(查询)
	Route::get('/collect/item','Home\CollectController@collect_item');
	//添加收藏信息
	Route::get('/collect/item/add/{gid}','Home\CollectController@itemadd');
	Route::get('/collect/add/{gid}','Home\CollectController@sadd');
	//移除收藏
	Route::get('/collect/item/del/{gid}','Home\CollectController@itemdel');
	Route::get('/collect/del/{sid}','Home\CollectController@sdel');

	//导航ajax购物车详情
	Route::get('/carinfo','Home\CarInfoController@info');
	//支付页面
	Route::get('/pay','Home\PayController@pay');
});

//短信验证
//获取验证码 input('uphone') json
Route::get('/sendms','Auth\SmsController@sendms');
//短信剩余条数查询
Route::get('/elsems','Auth\SmsController@elsems');


//商品详情
Route::get('/goods_item','Home\GoodsController@index');
//搜索详情
Route::get('/search_result','Home\GoodsController@result');


//建立前台路由
Route::group(['middleware'=>'isclose'],function(){
	//前台首页
	Route::get('/','Home\IndexController@index');
	Route::get('/index','Home\IndexController@index');
	//前台搜索界面
	Route::get('/user/find','Admin\UserController@find');
	//Route::get('/user/find','Admin\UserController@find');
	//插入购物车操作
	Route::get('/home/cart/tupdate','home\cartController@tupdate');

	//前台友链显示
	Route::get('/home/cart','Home\flinkController@flink');

	//图片轮播1
	Route::get('/home/index','Home\LunBoController@lunbo');
	//图片轮播2
	//Route::get('/index','Home\CarouselController@carousel');


	});

Route::group([],function(){
	//购物车列表
	Route::get('/home/cart','Home\cartController@cart');
	//购物车删除
	Route::get('/home/cart/delete','home\cartController@delete');
	//减商品操作
	Route::get('/home/cart/xupdate','home\cartController@xupdate');
	//加商品操作
	Route::get('/home/cart/supdate','home\cartController@supdate');
	//店铺评价页面
	Route::get('/home/orassess/orindex','home\assessController@orindex');
	//评价页面
	Route::get('/home/assess/index','home\assessController@index');
	//评价操作
	Route::post('/home/assess/insert','home\assessController@insert');
	//开店流程1
	Route::get('/home/storeopen/sold','home\storeopenController@sold');
	//流程2
	Route::get('/home/storeopen/soldq','home\storeopenController@soldq');
	//流程3
	Route::get('/home/storeopen/solds','home\storeopenController@solds');
});
//卖家相关路由
Route::group([],function(){
	//卖家个人中心界面
	Route::get('/istore','Home\SellerController@istore');
	//上架商品选择类目
	Route::get('/auction','Home\SellerController@auction');
	//上架商品选择商品属性界面
	Route::post('/upload','Home\SellerController@upload');
	//上架商品操作
	Route::get('/shelves','Home\SellerController@shelves');
});
//支付相关路由
Route::group([],function(){
	//选择地址  提交订单 跳转到支付页面
	Route::post('/pay_address','Home\OrderController@pay_address');
	//提交订单操作
	Route::get('/paya','Home\OrderController@paya');
	//查看所有订单
	Route::get('/order_all','Home\OrderController@order_all');
	//待付款订单
	Route::get('/order_wait_payment','Home\OrderController@order_wait_payment');
	
});
Route::get('/errors/503',function(){
	return view('errors/503');
});
