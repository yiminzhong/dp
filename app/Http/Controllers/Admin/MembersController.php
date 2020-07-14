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

        return $this->render('members/members_list')->with('admin',$admin)->with('members_list',$members_list);
    }

    public function members_status($id){

        if (!$id || $id==0){

            $response = [
                'status'=>0,
                'msg'=>"会员不存在",
            ];

            return json_encode($response);
        }

        $request = \request()->all();

        if (!isset($request['status']) || !$request['status']){


            $response = [
                'status'=>0,
                'msg'=>"意外操作 账户状态不正确",
            ];

            return json_encode($response);

        }

        if ($request['status'] == 'stop'){
            $status = 0;
        }else{
            $status = 1;
        }


        $change_status = Admin\Member::find($id);


        if ($change_status->status == $status){

            $response = [
                'status'=>0,
                'msg'=>"意外操作 账户状态不正确",
            ];

            return json_encode($response);


        }

        $change_status->status = $status;

        if ($change_status->save()){

            $response = [
                'status'=>1,
                'msg'=>"操作完成",
            ];

            return json_encode($response);
        }

    }


    public function members_info($id){

        if (!$id || $id == 0){

            return self::notice("会话不存在", 2, array(array('title' => '会员列表', 'url' => url('/members_lsit'))));

        }
    }

}
