<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Admin;
use App\Models\Admin\Identity;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\Controller;

class IdentityController extends Controller
{
    public function list(){

        $admin = $this->getCurrentUser();

        $identity_list = $oLog = Identity::orderBy('id', 'desc');

        $identity_list = $identity_list->paginate(10);

        $data['lists'] = $identity_list;

        $data['tools'] = array(
            array('title' => '新增角色', 'href' => url(''))
        );
        $data['location'] = array(array('title' => '新增角色'));

        return $this->render('identity_list')->with('admin',$admin)->with('ident_list',$identity_list);
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


    public function add($id=0){
        if (!$id || $id=0){
            return self::notice("会话不存在", 2, array(array('title' => '角色管理', 'url' => url('/identity_list'))));
        }
        $admin = $this->getCurrentUser();

        $s =  $admin->getPrivilegeMenus();

        if (request()->isMethod('post')) {
            $requestlist = \request()->all();

            if (!isset($requestlist['rolename']) || !$requestlist['rolename']){
                return ['ok'=>2,'msg'=>"角色名称不能为空"];
            }

            $rolename = Identity::where('group_name',$requestlist['rolename'])->first();
            if ($rolename){
                return ['ok'=>2,'msg'=>"角色名称已存在"];
            }

            $role = new Identity();
            $role->group_name = $requestlist['rolename'];
            $role->description = $requestlist['roleremark'];
            $role->privileges = json_encode($requestlist['title']);
            $role->type = 1;
            $role->status = 0;
            $role->creat_id = $admin->id;
            if ($role->save()){
                return ['ok'=>1,'msg'=>"角色添加成功"];
            }else{
                return ['ok'=>2,'msg'=>'角色添加失败'];
            }


        }
        return $this->render('identity_add')->with('s',$s)->with('admin',$admin);
    }

    public function status($id=0){
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


        $change_identity = Identity::find($id);

        if ($change_identity->creat_id == 0){
            return json_encode(['msg'=>"您无权操作此状态"]);
        }


        if ($change_identity->status == $status){

            return json_encode(['msg'=>"账户异常，请稍等操作"]);

        }

        $change_identity->status = $status;

        if ($change_identity->save()){
            return json_encode(['msg'=>"操作完成"]);
        }




    }


    public function edite($id=0){

        //$id  角色id
        if (!$id || $id == 0){

            return self::notice("会话不存在", 2, array(array('title' => '管理员列表', 'url' => url('/admin_list'))));

        }

        //获取登陆账户id
        $admin = $this->getCurrentUser();

        $s =  $admin->getPrivilegeMenus();


        $identity = Identity::find($id);

        $checked = json_decode($identity->privileges);

        $data['tools'] = [
            'url'=>"/identity_edite/".$id
        ];

        if (\request()->isMethod('post')){

            $request = \request()->all();

            if(!isset($request['title']) || !$request['title']){
                return ['ok'=>2,'msg'=>"超级管理员，请勿操作"];
            }

            $identity2 = Identity::find($id);

            $identity2->privileges = json_encode($request['title']);

            if ($identity2->save()){
                return ['ok'=>1];
            }else{
                return ['ok'=>2];
            }

        }


        return $this->render('identity_edite')->with('tools',$data)->with('s',$s)->with('checked',$checked);
    }

}
