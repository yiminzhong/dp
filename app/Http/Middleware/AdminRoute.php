<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Route;
use Illuminate\Contracts\Auth\Factory as Auth;

class AdminRoute {
    protected $auth;
    public function __construct(Auth $auth)
    {
        $this->auth = $auth;
    }

    public function handle($request, Closure $next)
    {
        $res=$this->backend($this->auth,$request);

        if($res!==true){
            return $res;
        }

        return $next($request);
    }

    public function backend($auth,$request)
    {
        $admin = $auth->user();

        $action     = Route::currentRouteName();

        if ($admin->status != 1) {

            return response()->view('admin.error.missing', [], 404);
        }

        $pri = $admin->getPrivileges();

        $pass = 0;
        //检查权限
        if($action){

            if (  (count($pri) == 1 && $pri[0] =="*") || in_array($action,$pri)){
                $pass = 1;
            }

        }


        if(!$pass){
            return response()->view('admin.error/403', ['msg'=>"暂无权限访问"], 403);
        }

        return true;
    }
}
