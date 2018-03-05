<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    protected $fillable = ["name" , "slug" , "description"];


    public function permission(){
        return $this->hasOne(Permission::class);
    }

    //TODO getDeputyPrincipalIds()
    //1. get role id from role
    //2. get users with above role id from user_role
}
