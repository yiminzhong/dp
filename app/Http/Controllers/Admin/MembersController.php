<?php

namespace App\Http\Controllers\Admin;




use App\Models\Admin;
use Illuminate\Support\Facades\DB;

class MembersController extends Controller
{
    public function list(){

        $admin = $this->getCurrentUser();

        $members = DB::table('members') ->select('members.*','members2.id as m_id','members2.login_name as m_name')->leftjoin('members as members2','members.p_id','=','members2.id')->orderBy('id', 'desc');



        $members_list = $members->paginate(10);

        $data['lists'] = $members_list;

//        $data['tools'] = array(
//            array('title' => '新增角色', 'href' => url(''))
//        );
//        $data['location'] = array(array('title' => '新增角色'));

        return $this->render('members/members_list')->with('admin',$admin)->with('members_list',$members_list);
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

    public function members_status($id){

    }

}
