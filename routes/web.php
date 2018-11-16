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

Route::get('/', function () {
    return view('welcome');
});
//前台路由
Route::get('/','Home\IndexController@index');
Route::get('about/','Home\IndexController@article');
Route::get('list/','Home\IndexController@list');
Route::get('share/','Home\IndexController@share');
Route::get('info/','Home\IndexController@info');
Route::get('time/','Home\IndexController@time');
Route::get('infopic/','Home\IndexController@infopic');

//后台路由
