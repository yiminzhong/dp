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

Route::any('login',  'MainController@login')->name('login');
Route::any('registered',  'MainController@registered')->name('registered');
Route::get('logout', array('as' => 'MainController@logout', 'uses' => "MainController@logout"));
Route::any('jump', array('as' => 'MainController@jump', 'uses' => "MainController@jump"));

Route::any('welcome', array('as' => 'MainController@welcome', 'uses' => 'MainController@welcome') );
Route::get('', array('as' => 'MainController@index', 'uses' => "MainController@index"));


Route::get('about_us', array('as' => 'MainController@about_us', 'uses' => "MainController@about_us"));


Route::group(array('middleware' => ['auth:members']), function () {
    // 首页相关

    Route::group(array('middleware' => 'admin.acl'), function () {
        //日志
//        Route::any('log_index', array('as' => 'LogController@index', 'uses' => 'LogController@index') );
//        Route::any('error_logs',array('as' => 'LogController@errorlog', 'uses' => '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index'));

    });
});
