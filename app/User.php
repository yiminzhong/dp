<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAuthIdentifierName()
    {
        return 'id';
    }

    public function getPrivilegeMenus()
    {
        $acl = config('admin.acl');

        $privileges = $acl['privileges'];

        $allows = $this->getPrivileges();
        if ($allows){
            return $privileges;
        }
//        dd($allows);
//        $menus = array();
//        foreach ($privileges as $menu1) {
//            $m1 = array();
//            if (isset($menu1['child'])) {
//                foreach ($menu1['child'] as $menu2) {
//                    $m2 = array();
//                    if (isset($menu2['child'])) {
//                        foreach ($menu2['child'] as $menu3) {
//                            if (isset($allows[$menu3['action']])) {
//                                $m2[] = $menu3;
//                            }
//                        }
//                    }
//                    $menu2['child'] = $m2;
//
//                    if (isset($allows[$menu2['action']])) {
//                        $m1[] = $menu2;
//                    }
//                }
//            }
//
//            $menu1['child'] = $m1;
//
//            if (count($menu1['child'])) {
//                $menus[] = $menu1;
//            }
//        }
//
//        return $menus;
    }

    //可操作的权限列表
    public function getPrivileges()
    {
        $acl = config('admin.acl');
        $privileges = $acl['privileges'];


        $type = $this->type;


        if ($type == 1){
            return true;
        }else{
            return [];
        }
//        dd($this->type);
//        if (isset($acl['roles'][$group->id])) {
//            $p = $acl['roles'][$group->id];
//            $pri = $p['actions'];
//
//            $allows = array();
//            array_walk_recursive($privileges, function ($value, $key) use ($pri, &$allows) {
//                if ($key != 'action') return;
//
//                $ex = explode('@', $value);
//
//                if (in_array('*', $pri) || in_array($value, $pri) || in_array($ex[0] . '@*', $pri)) {
//                    $allows[$value] = 1;
//                }
//            });
//
//        } else {
//            $row = db()->table('admin_groups')->select('privileges')->where('id', $group->id)->first();
//            if (!empty($row->privileges)) {
//                $pri = json_decode($row->privileges, true);
//            } else {
//                $pri = array();
//            }
//            $allows = array_flip($pri);
//            $allows += array_flip($this->privileges);
//        }
//
//        return $allows;
    }
}
