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
     Route::get('news/create', 'Admin\NewsController@add');
     Route::post('news/create', 'Admin\NewsController@create'); # 追記
     Route::get('profile/create', 'Admin\ProfileController@add'); # 追記
     Route::post('profile/create', 'Admin\ProfileController@create'); # 追記
     Route::post('profile/edit', 'Admin\ProfileController@edit'); # 追記(2022/1/4)
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
