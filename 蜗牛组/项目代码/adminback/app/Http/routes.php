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

Route::get('/','LoginController@index');

Route::get('/index',function(){
	return view('.admin.index');
});

//后台登录
Route::post('/checkLogin','LoginController@checkLogin');


// -------------------------------------------------------

//	用户列表
Route::get('user/index','UserController@index');

//	添加用户
Route::get('user/addPage','UserController@addPage');

//	添加用户方法
Route::post('user/add','UserController@add');

//	修改用户
Route::get('user/modifyPage','UserController@modifyPage');

//	添加用户
Route::post('user/modify','UserController@modify');

//	删除用户
Route::get('user/delete','UserController@delete');

// --------------------------------------------------------

//	角色权限列表
Route::get('role/index','RoleController@index');

//	查看所有 权限方法

//	添加角色权限
Route::get('role/addPage','RoleController@addPage');

//	添加角色权限方法
Route::post('role/add','RoleController@add');

//	修改角色权限
Route::get('role/modifyPage','RoleController@modifyPage');

//	添加角色权限
Route::post('role/modify','RoleController@modify');

//	删除角色权限
Route::get('role/delete','RoleController@delete');

// -------------------------------------------------------------

//	权限列表
Route::get('power/index','PowerController@index');

//	添加权限
Route::get('power/addPage','PowerController@addPage');

//	添加权限方法
Route::post('power/add','PowerController@add');

//	修改权限
Route::get('power/modifyPage','PowerController@modifyPage');

//	添加权限
Route::post('power/modify','PowerController@modify');

//	删除权限
Route::get('power/delete','PowerController@delete');