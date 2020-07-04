<?php

namespace App\Http\Controllers\Member;

use App\Models\Admin\Admin;
use App\Models\Admin\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Member\Controller;
use Illuminate\Support\Facades\Hash;
use PragmaRX\Google2FA\Google2FA;
use App\Models\Members\Members;



class MainController extends Controller
{

    public static $login_rules = array(
        'name' => 'required|alpha_dash|min:2',
        'password' => 'required|alpha_dash|between:4,45',
    );

    protected function validateLogin(Request $request){
        $s = $this->validate($request, [
            'name' => 'required|alpha_dash|min:2',
            'password' => 'required|alpha_dash|between:4,45',
//            'captcha' => 'required|captcha',
        ],[
            'name.required' => trans('validation.required'),
            'member_user.alpha_dash' => trans('validation.alpha_dash'),

            'password.required' => trans('validation.required'),
            'password.alpha_dash' => trans('validation.alpha_dash'),
//
//            'captcha.required' => trans('validation.required'),
//            'captcha.captcha' => trans('验证码错误'),

        ]);

        return true;
    }

    protected function validateLogin2(Request $request){
        $s = $this->validate($request, [
            'name' => 'required|alpha_dash|min:2',
            'password' => 'required|alpha_dash|between:4,45',
        ],[
            'name.required' => trans('validation.required'),
            'name.alpha_dash' => trans('validation.alpha_dash'),

            'password.required' => trans('validation.required'),
            'password.alpha_dash' => trans('validation.alpha_dash'),

//            'captcha.required' => trans('validation.required'),
//            'captcha.captcha' => trans('验证码错误'),

        ]);

        return true;
    }


    public function index() {

        $admin = $this->getCurrentUser();

        if (isset($admin->status)&&$admin->status !== 1 ){
            auth('members')->logout();
            return redirect('login')->with('warning', '暂未分权');;
        }

        return $this->render('welcome')->with('admin',$admin);
    }



    public function login(Request $request){

        if (auth('members')->check()){

            return redirect('');
        }

        if (request()->isMethod('post')){

            $v = self::validateLogin($request);

            if ($v) {

                $member_user = request('name','');

                if (auth('members')->attempt(array('login_name' => request('name', ''), 'password' => request('password', '')), request('remember', 0) ? true : false)) {
                    $user = auth('members')->user();



                    if ($user->status != 1) {
                        auth('members')->logout();
                        return redirect('login')->with('warning', '登陆失败，账户处于禁用状态！');
                    }

//                    $iCostWorker = configure('web_pass_workers',10);
//                    dd($iCostWorker);
//                    $options = ['rounds' => $iCostWorker];
//                    if (Hash::needsRehash($user['password'],$options)) {
//                        $user->password = bcrypt(request('password'),$options);
//                    }

                    if (Hash::needsRehash($user['password'])) {
                        $user->password = bcrypt(request('password'));
                    }

                    $user->session_id=session()->getId();
                    $user->save();

//                    try{
//                        $job = new \App\Jobs\Telegram("管理员:ID[{$tg_username}] 已登录财务后台,登录时间:".date('Y-m-d H:i:s',time())."");
//                        $job->onQueue( config('tube.Email', 'default') );
//                        dispatch( $job );
//                    }catch (\Exception $e){
//                        logger()->error($e);
//                    }

                    return redirect('');
                }
//
//                try{
//                    $job = new \App\Jobs\Telegram("账号:ID[{$tg_username}] 尝试登录财务后台失败!, 时间:".date('Y-m-d H:i:s',time())."");
//                    $job->onQueue( config('tube.Email', 'default') );
//                    dispatch( $job );
//                }catch (\Exception $e){
//                    logger()->error($e);
//                }

                return redirect('login')->with('warning', '登陆失败，账号或密码错误！');
            } else {
                return redirect('login')->withErrors($v)->withInput();
            }

        }


        return $this->Render('login');
    }
    /**
     * 提示页面 跳转中转页面
     */
    public function jump()
    {
        $message = request('msg', '未知消息');
        $type    = request('type', 0);
        $links   = request('links', []);

        return $this->render('main_jump')
            ->with('msg', $message)
            ->with('type', $type)
            ->with('links', $links);
    }

    public function welcome()
    {

        return $this->render('welcome');
    }

    public function logout()
    {
        auth('members')->logout();

        return redirect('');
    }


    public function registered(Request $request){

        if (request()->isMethod('post')){

            $v = self::validateLogin2($request);

            if ($v) {

                $recommend = request('recommend','');
                $_token = request('_token','');
                $name = request('name','');
                $email = request('email','');
                $iphone = request('iphone','');
                $password = request('password','');
                $password2 = request('password2','');

                if ($password !==$password2){
                    return redirect('registered')->with('warning', '注册失败，两次密码不一致！');
                }

                $p_id = 0;
                if($recommend){
                    $member = Member::where('votes',$recommend)->first();
                    if ($member->id){
                        $p_id = $member->id;
                    }
                }

                $member = new Members();
                $member->login_name = $name;
                $member->email = $email;
                $member->ipone =  $iphone;
                $member->password = bcrypt( $password);
                $member->status =  1;
                $member->p_id =  $p_id;

            if ($member->save()){
                return redirect('login');
            }

                return redirect('registered')->with('warning', '登陆失败，账号或密码错误！');
            } else {
                return redirect('login')->withErrors($v)->withInput();
            }

        }

        return $this->render('register');
    }


    public function about_us(){
        $admin = $this->getCurrentUser();

        if (isset($admin->status)&&$admin->status !== 1 ){
            auth('members')->logout();
            return redirect('login')->with('warning', '暂未分权');;
        }

        return $this->render('about_us')->with('admin',$admin);
    }


}
