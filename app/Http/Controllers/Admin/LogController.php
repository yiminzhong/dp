<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\AdminLogs;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\Controller;

class LogController extends Controller
{
    public function index(){

        $s = array('status' => '', 'username' => '');

        $status =request('status','-1');
        $username =request('username','');


        $oLog = AdminLogs::orderBy('id', 'desc');

        if($status=='-1'){

        }elseif ($status == 0 || $status == 1) {
            $oLog = $oLog->where('status', '=', $status);
            $s['status'] = $status;
        }

        if ($username!='') {
            $oLog = $oLog->where('admin_name', '=', $username);
            $s['username'] = $username;
        }

        $logs = $oLog->paginate(10);

        $data['lists'] = $logs;
        $data['location'] = array(array('title' => '日志列表'));
//        dd($data['lists']);
        return $this->render('log_index')->with('data', $data)->with('s', $s);

    }
}
