<?php

namespace App\Http\Controllers\Member;

use App\Models\Admin\Admin;
use App\Models\Admin\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Member\Controller;
use Illuminate\Support\Facades\Hash;
use PragmaRX\Google2FA\Google2FA;
use App\Models\Members\Members;



class MemberController extends Controller
{
    public function myinfo(){
        $admin = $this->getCurrentUser();

        if (isset($admin->status)&&$admin->status !== 1 ){
            auth('members')->logout();
            return redirect('login')->with('warning', '暂未分权');;
        }


        $my_menbers = Member::where('p_id',$admin->id) ->orderBy('id', 'desc');



        $my_menbers_list = $my_menbers->paginate(10);


        return $this->render('myinfo')->with('admin',$admin)->with('my_menbers_list',$my_menbers_list);
    }
}
