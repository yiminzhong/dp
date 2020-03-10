<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Admin;
use App\Models\Admin\Identity;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use PragmaRX\Google2FA\Google2FA;
use PragmaRX\Google2FA\Support\Url;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function list(){

        $admin = $this->getCurrentUser();

        $users = DB::table('users')->select('users.*','group_identity.id as gid','group_identity.group_name','group_identity.privileges as gpri','group_identity.creat_id as gcreat_id')
            ->leftJoin('group_identity', 'users.groups_id', '=', 'group_identity.id')->where('users.id','<>',$admin->id)
            ->orderBy('users.id', 'desc');

        $admin_list = $users->paginate(10);

        $data['lists'] = $admin_list;
        $data['tools'] = array(
            array('title' => '添加管理员', 'href' => url('administrator_add/'.$admin->id))
        );

        return $this->render('admin_list')->with('data', $data)->with('admin',$admin);
    }

    public function add($id=0){

        if (!$id || $id == 0){

            return self::notice("会话不存在", 2, array(array('title' => '管理员列表', 'url' => url('/admin_list'))));

        }

        $google2fa = new Google2FA();
        $google = $google2fa->generateSecretKey();

        $google2fa_url = $google2fa->getQRCodeUrl(
            '财务管理',
            '',
            $google
        );
        $size = 200 ;
        $google2fa_url = Url::generateGoogleQRCodeUrl('https://chart.googleapis.com/', 'chart', 'chs='.$size.'x'.$size.'&chld=M|0&cht=qr&chl=', $google2fa_url);


        if (request()->isMethod('post')) {

            $request = \request()->all();
            $admin2 = new Admin();
            $admin2->name = $request['adminName'];
            $admin2->nike_name = $request['adminName2'];
            $admin2->password = bcrypt('123qwe');
            $admin2->google = $request['adminGoogle'];
            $admin2->email = Str::random(10).'@gmail.com';
            $admin2->type = 2; //1是系统超级管理员 只有一个 其他均为普通管理 0号管理员
            $admin2->creat_id = $id;
            $admin2->groups_id = 0;
            $admin2->status = 0;
            if ($admin2->save()){
                return ['ok'=>1];
            }else{
                return ['ok'=>2];
            }

        }
        return $this->render('admin_add')->with('google2fa_url', $google2fa_url)->with('google', $google);

    }


    public function status($id=0){

        if (!$id || $id==0){

            return json_encode(['msg'=>"意外操作，账户可能不存在，异常"]);
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


        $change_admin = Admin::find($id);

        if ($change_admin->creat_id == 0){
            return json_encode(['msg'=>"您无权操作此状态"]);
        }


        if ($change_admin->creat_id == 0){
            return json_encode(['msg'=>"您无权操作此状态"]);
        }


        if ($change_admin->status == $status){

            return json_encode(['msg'=>"账户异常，请稍等操作"]);

        }

        $change_admin->status = $status;

        if ($change_admin->save()){
            return json_encode(['msg'=>"操作完成"]);
        }

    }

    public function password($id=0){
        if (!$id || $id == 0){

            return self::notice("会话不存在", 2, array(array('title' => '管理员列表', 'url' => url('/admin_list'))));
        }

        $change_admin = Admin::find($id);


        if (\request()->isMethod('post')){

            $request = \request()->all();

            if (!$request['newpassword2'] && !$request['newpassword']){
                return ['ok'=>2];
            }

            $change_admin->password = $request['newpassword'];

            if ($change_admin->save){
                return ['ok'=>1];
            }else{
                return ['ok'=>2];
            }

        }

        return $this->render('admin_password')->with('change_admin', $change_admin);
    }

    public function auth_privileges($id=0){

        if (!$id || $id == 0){

            return self::notice("会话不存在", 2, array(array('title' => '管理员列表', 'url' => url('/admin_list'))));
        }

        $admin = $this->getCurrentUser();

        $aadmin1 = Admin::find($id);

        $checked = json_decode($aadmin1->privileges);

        if (!$checked){
            $checked = [];
        }

        if ($aadmin1->groups_id){
            $identity = Identity::find($aadmin1->groups_id);

            $privileges_identity = json_decode($identity->privileges,true);
            if (!$privileges_identity){
                $privileges_identity = [];
            }

            if ($identity->status !==1){
                $privileges_identity = [];
            }

            $privileges =  array_merge($privileges_identity, $checked);
            $checked = array_unique($privileges);


        }

        $menus = $admin->getPrivilegeMenus();

        $tools = ['url'=>"/administrator_auth_privileges/".$id];

        if (\request()->isMethod('post')){

            $request = \request()->all();

            if(!isset($request['title']) || !$request['title']){
                return ['ok'=>2,'msg'=>"超级管理员，请勿操作"];
            }

            $aadmin = Admin::find($id);

            $aadmin->privileges = json_encode($request['title']);

            if ($aadmin->save()){
                return ['ok'=>1];
            }else{
                return ['ok'=>2];
            }

        }



        return $this->render('admin_auth_privileges')->with('admin', $admin)->with('s', $menus)->with('tools',$tools)->with('checked',$checked);
    }


    public function role_select($id =0 ){

        if (!$id || $id == 0){

            return self::notice("会话不存在", 2, array(array('title' => '管理员列表', 'url' => url('/admin_list'))));
        }


        $admin = $this->getCurrentUser();

        $prleges = $admin->getPrivileges();

        if (count($prleges) == 1 && in_array("*",$prleges)) {

            $identity = Identity::get();

        }else{
            $identity = Identity::where('creat_id',$admin->id)->get();
        }


        if (\request()->isMethod('post')){
            $request = \request()->all();

            $identity2 = Identity::where('status',1)->find($request['adminRole']);


            $t_admin = Admin::where('status',1)->find($id);

            if (!$t_admin){
                return self::notice("会话不存在", 2, array(array('title' => '管理员列表', 'url' => url('/admin_list'))));
            }

            if (count(json_decode($identity2->privileges,true)) == 1 && in_array("*",json_decode($identity2->privileges,true))){  // 角色是超级管理员角色 修改一下个人权限
                $t_admin->privileges = json_encode(["*"]);
            }
            $t_admin->groups_id = $request['adminRole'];


            if ($t_admin->save()){
                return ['ok'=>1];
            }else{
                return ['ok'=>2];
            }


        }

        return $this->render('admin_role_select')->with('identity', $identity);
    }


    public function info(){

        if (\request()->isMethod('post')){
            $request = \request()->all();

            $admin = $this->getCurrentUser();

            $oldpassword = $request['oldpassword'];

            if(!Hash::check($oldpassword, $admin->password)){
                return ['ok'=>2,'msg'=>"原密码错误"];
            }

            if (isset($request['password']) ){
                $admin->password = bcrypt($request['password']);
            }

            if ($admin->save()){
                return ['ok'=>1];
            }else{
                return ['ok'=>2];
            }


        }

        return $this->render('admin_info');
    }


}
