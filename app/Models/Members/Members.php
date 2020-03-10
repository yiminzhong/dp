<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Identity;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Arr;

class Members extends Authenticatable
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'Members';

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


        if (in_array("*", $allows) && count($allows) == 1){

            return $privileges;

        }else{

            if (empty($allows)){
                return [];
            }

//            $filtered = Arr::where($privileges, function ($value, $key) use ($allows) {
//
//            });

            foreach ($privileges as $k=> $v){


                foreach ($v['child'] as $ck=>$cv){

                    if (empty($cv['child'])){
                        unset($privileges[$k]['child'][$ck]);
                    }

                    if (!in_array($cv['action'],$allows)){

                        unset($privileges[$k]['child'][$ck]);

                    }

                    if (isset($cv['child'])){
                        foreach ($cv['child'] as $a=>$b){
                            if (!in_array($b['action'],$allows)){

                                unset($privileges[$k]['child'][$ck]['child'][$a]);

                            }
                        }
                    }

                }


                if (empty($privileges[$k]['child'])){
                    unset($privileges[$k]);
                }



            }

            return $privileges;

        }

    }

    //可操作的权限列表
    public function getPrivileges()
    {

        if ($this->status !==1){
            return [];
        }

        $auth_privileges = json_decode($this->privileges,true);

        if (empty($auth_privileges) ){
            $auth_privileges = [];
        }

        $g = self::group()->first();


        if (!$g){
            $g_privileges = [];
        }else{
            $g_privileges = json_decode($g->privileges,true);
        }


        $privileges =  array_merge($auth_privileges, $g_privileges);
        $privileges = array_unique($privileges);


        return $privileges;


    }


    public function group(){
        return $this->hasOne('App\Models\Admin\Identity' , 'id','groups_id');
    }





}
