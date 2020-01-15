<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Admin\Controller;

class MainController extends Controller
{
    public function login(){

        if (auth('admin')->check()){
            return redirect('');
        }
        return "login 控制器";
    }
}
