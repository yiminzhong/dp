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
Route::any('jump', array('as' => 'MainController@jump', 'uses' => "MainController@jump"));

Route::group(array('middleware' => ['auth:admin']), function () {
    // 首页相关
    Route::get('', array('as' => 'MainController@index', 'uses' => "MainController@index"));
    Route::any('welcome', array('as' => 'MainController@welcome', 'uses' => 'MainController@welcome') );

    Route::group(array('middleware' => 'admin.acl'), function () {
        //日志
        Route::any('log_index', array('as' => 'LogController@index', 'uses' => 'LogController@index') );
        Route::any('log_info/{id}', array('as' => 'LogController@info', 'uses' => 'LogController@info') );
        Route::any('error_logs',array('as' => 'LogController@errorlog', 'uses' => '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index'));



    //    管理员组
        Route::any('administrator_list', array('as' => 'AdminController@list', 'uses' => 'AdminController@list') );
        Route::any('administrator_add/{id}', array('as' => 'AdminController@add', 'uses' => 'AdminController@add') );
        Route::any('administrator_status/{id}', array('as' => 'AdminController@status', 'uses' => 'AdminController@status') );
        Route::any('administrator_password/{id}', array('as' => 'AdminController@password', 'uses' => 'AdminController@password') );
        Route::any('administrator_auth_privileges/{id}', array('as' => 'AdminController@auth_privileges', 'uses' => 'AdminController@auth_privileges') );
        Route::any('administrator_role_select/{id}', array('as' => 'AdminController@role_select', 'uses' => 'AdminController@role_select') );
        Route::any('administrator_info', array('as' => 'AdminController@info', 'uses' => 'AdminController@info') );

    //角色组
        Route::any('identity_list', array('as' => 'IdentityController@list', 'uses' => 'IdentityController@list') );
        Route::any('identity_add/{id}', array('as' => 'IdentityController@add', 'uses' => 'IdentityController@add') );
        Route::any('identity_status/{id}', array('as' => 'IdentityController@status', 'uses' => 'IdentityController@status') );

        Route::any('identity_edite/{id}', array('as' => 'IdentityController@edite', 'uses' => 'IdentityController@edite') );

        //会员管理
        Route::any('members_list', array('as' => 'MembersController@list', 'uses' => 'MembersController@list') );
        Route::any('members_status/{id}', array('as' => 'MembersController@members_status', 'uses' => 'MembersController@members_status') );
        Route::any('members_info/{id}', array('as' => 'MembersController@members_info', 'uses' => 'MembersController@members_info') );


        //职位列表OfficeController

        Route::any('office_list', array('as' => 'OfficeController@list', 'uses' => 'OfficeController@list') );
        Route::any('office_add/{id}', array('as' => 'OfficeController@add', 'uses' => 'OfficeController@add') );
        Route::any('office_edit/{id}', array('as' => 'OfficeController@edit', 'uses' => 'OfficeController@edit') );


        Route::any('article_list', array('as' => 'ArticleController@list', 'uses' => 'ArticleController@list') );
        Route::any('article_add/{id}', array('as' => 'ArticleController@add', 'uses' => 'ArticleController@add') );

    });
});
