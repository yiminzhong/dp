<?php

namespace App\Http\Controllers\Admin;




use App\Models\Admin;
use App\Models\Admin\Identity;
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
        if (!$id || $id==0){

            return json_encode(['msg'=>"角色不存在"]);
        }

        $request = \request()->all();

        if (!isset($request['status']) || !$request['status']){

            return json_encode(['msg'=>"意外操作 账户状态不正确"]);

        }

        if ($request['status'] == 'stop'){

            $status = 0;
        }else{
            $status = 1;
        }


        $change_status = Admin\Member::find($id);


        if ($change_status->status == $status){

            return json_encode(['msg'=>"账户异常，请稍等操作"]);

        }

        $change_status->status = $status;

        if ($change_status->save()){
            return json_encode(['msg'=>"操作完成"]);
        }

    }


    public function members_info($id){

        if (!$id || $id == 0){

            return self::notice("会话不存在", 2, array(array('title' => '会员列表', 'url' => url('/members_lsit'))));

        }
    }

}
