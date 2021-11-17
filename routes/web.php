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

Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create', 'Admin\NewsController@add');
});

Route::group(['prefix' => 'admin'], function() {
     Route::get('news/create', 'Admin\NewsController@add');
     Route::get('news/delete', 'Admin\NewsController@delete');
     Route::get('news/update', 'Admin\NewsController@update');
});

Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create', 'Admin\NewsController@add');
});


/* ここから「「PHP/Laravel 09 Routingについて理解する」の課題提出です。
   3.「http://XXXXXX.jp/XXX というアクセスが来たときに、
    AAAControllerのbbbというAction に渡すRoutingの設定」
    を書いてみてください
*/

Route::get('XXX','Admin\AAAController@bbb');

/*
    4. 【応用】 前章でAdmin/ProfileControllerを作成し、add Action, edit Actionを追加しました。
    web.phpを編集して、admin/profile/create にアクセスしたら ProfileController の add Action に、
    admin/profile/edit にアクセスしたら ProfileController の edit Action に
    割り当てるように設定してください。
*/

Route::get('admin/profile/create','Admin\ProfileController@add');

Route::get('admin/profile/edit','Admin\ProfileController@edit');

