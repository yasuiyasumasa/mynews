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

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
     Route::get('news/create', 'Admin\NewsController@add'); //
     Route::post('news/create', 'Admin\NewsController@create'); # 追記//
     Route::get('news', 'Admin\NewsController@index'); # 追記(2022/1/8)//
     Route::get('news/edit', 'Admin\NewsController@edit'); //
     Route::post('news/edit', 'Admin\NewsController@update'); # 追記 //
     Route::get('news/delete', 'Admin\NewsController@delete'); //
     
     Route::get('profile/create', 'Admin\ProfileController@add'); # 追記
     Route::post('profile/create', 'Admin\ProfileController@create'); # 追記
     Route::get('profile', 'Admin\ProfileController@index'); # 追記(2022/1/4)
     Route::get('profile/edit', 'Admin\ProfileController@edit'); # 追記(2022/1/11)
     Route::post('profile/edit', 'Admin\ProfileController@update'); # 追記(2022/1/11)
     Route::get('profile/delete', 'Admin\ProfileController@delete'); # 追記(2022/1/14)
     
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
