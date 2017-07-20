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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/xiangqing', 'homeController@xiangqing');
// Route::get('/zc', 'homeController@zhuce');
//登陆
Route::get('/login','LoginController@login');
Route::post('/login','LoginController@dologin');
//注册
Route::get('/zhuce', 'Auth\AuthController@getRegister');
Route::post('/zhuce', 'Auth\AuthController@postRegister');
//商品图片添加
Route::get('/shangpin', 'tianjiaController@shangpin');
//商品图片显示
Route::post('/shangpin', 'tianjiaController@xianshi');
Route::get('/shangpinxiangqing', 'tianjiaController@shangpinxiangqing');
//文章列表显示
Route::resource('articles', 'ArticlesController');
Route::post('/markdown','ArticlesController@markdown');
//无限极分类
Route::controller('class', 'ClassController');
//购物车
Route::controller('/fenlei','WuxianController');
