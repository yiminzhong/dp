<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Member extends Model
{
    protected $table = 'members';

    public function get_list(){

        return $this->belongsToMany('App\Models\Admin\Member' , 'p_id','id');

    }


}
