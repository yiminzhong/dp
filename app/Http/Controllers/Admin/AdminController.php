<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\Controller;

class AdminController extends Controller
{
    public function list(){

        $admin_list = $oLog = Admin::orderBy('id', 'desc');

        $admin_list = $admin_list->paginate(10);
        $data['lists'] = $admin_list;

        return $this->render('admin_list')->with('data', $data);
//        $s = array('status' => '', 'username' => '');
//
//        $status =request('status','-1');
//        $username =request('username','');
//
//
//        $oLog = AdminLogs::orderBy('id', 'desc');
//
//        if($status=='-1'){
//
//        }elseif ($status == 0 || $status == 1) {
//            $oLog = $oLog->where('status', '=', $status);
//            $s['status'] = $status;
//        }
//
//        if ($username!='') {
//            $oLog = $oLog->where('admin_name', '=', $username);
//            $s['username'] = $username;
//        }
//
//        $logs = $oLog->paginate(10);
//
//        $data['lists'] = $logs;
//        $data['location'] = array(array('title' => '日志列表'));
////        dd($data['lists']);
//        return $this->render('log_index')->with('data', $data)->with('s', $s);

    }

    public function identity_list(){
        return $this->render('identity_list');
    }

}
