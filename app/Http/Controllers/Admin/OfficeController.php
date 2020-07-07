<?php

namespace App\Http\Controllers\Admin;




use App\Models\Admin;
use App\Models\Admin\Identity;
use Illuminate\Support\Facades\DB;

class OfficeController extends Controller
{
    public function list(){

        $admin = $this->getCurrentUser();

        $identity_list = $oLog = Identity::orderBy('id', 'desc');

        $identity_list = $identity_list->paginate(10);

        $data['lists'] = $identity_list;

        $data['tools'] = array(
            array('title' => '新增角色', 'href' => url(''))
        );
        $data['location'] = array(array('title' => '新增招聘启事'));

        return $this->render('officeer/office_list')->with('admin',$admin)->with('ident_list',$identity_list);
    }

}
