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
Route::get('logout', array('as' => 'MainController@logout', 'uses' => "MainController@logout"));

Route::group(array('middleware' => ['auth:admin']), function () {

    // 首页相关

    Route::get('', array('as' => 'MainController@index', 'uses' => "MainController@index"));
    Route::any('welcome', array('as' => 'MainController@welcome', 'uses' => 'MainController@welcome') );
});
