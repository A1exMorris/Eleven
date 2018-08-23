<?php

namespace KaravayPro;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    public function users(){
        return $this->belongsToMany('KaravayPro\User', 'user_role',    'role_id','user_id');
    }
}
