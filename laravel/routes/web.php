<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//使用闭包
//Route::get('/', function () {
//    return view('welcome');
//});
//直接指定方法
//Route::get('/user', 'UserController@index');

//Route::get('user/{name?}', function ($name = 'John') {   // 一定要给可选参数设置默认值
//    return $name;
//});
// 同时响应post get方法
Route::match(['get', 'post'], '/', function () {
    //
    echo  time();
});
//重定向路由
Route::redirect('/here', '/there');

Route::get('/there', function () {   // 一定要给可选参数设置默认值
    return "there ";
});
//视图路由
Route::view('/welcome', 'welcome', ['name' => 'Taylor']);
//路由参数
//必填
Route::get('user/{id}', function ($id) {
    return 'User '.$id;
});
//可填
Route::get('user2/{id?}', function ($id=123) {
    return 'User '.$id;
});

Route::get('user3', function () {
    return 'User '.$_GET['id'];
});
//路由别名
Route::get('user/profile', function () {
    return time();
})->name('profile');
//路由分组
Route::prefix('admin')->group(function () {
    Route::get('users', function () {
        return time();
    });
    Route::get('users2', function () {
        return time();
    });
});
//控制器路由
Route::get('test/{id}', 'TestController@index');
//后台控制器分住
Route::get('admin/index/index', 'Admin\IndexController@index');
Route::get('admin/index/insert', 'Admin\IndexController@insert');
Route::get('admin/index/del', 'Admin\IndexController@del');
Route::get('admin/index/update', 'Admin\IndexController@update');
Route::get('admin/index/select', 'Admin\IndexController@select');
//视图
Route::get('admin/index/view', 'Admin\IndexController@view');
Route::get('admin/index/ps', 'Admin\IndexController@ps');
Route::get('admin/index/csrf', 'Admin\IndexController@csrf');

//模型测试
Route::get('home/index/save', 'Home\IndexController@save');
Route::get('home/index/save2', 'Home\IndexController@save2');
Route::post('home/index/save2', 'Home\IndexController@save2');
// 查询
Route::any('home/index/sel', 'Home\IndexController@sel');
Route::any('home/index/update/{id}', 'Home\IndexController@update');
Route::any('home/index/del', 'Home\IndexController@del');
//自动验证
Route::any('home/index/validate', 'Home\IndexController@vali');
//文件上传
Route::any('home/index/upload', 'Home\IndexController@upload');
//分页
Route::any('home/index/page', 'Home\IndexController@page');
//验证码
Route::any('home/index/cap', 'Home\IndexController@cap');
//响应
Route::any('home/index/res', 'Home\IndexController@res');
//联表
Route::any('home/index/link', 'Home\IndexController@link');
//一对一
Route::any('home/index/relate', 'Home\IndexController@relate');
//一对多
Route::any('home/index/many', 'Home\IndexController@many');
//多对多
Route::any('home/index/mtom', 'Home\IndexController@mtom');
