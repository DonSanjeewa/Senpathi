<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Role extends Model
{

    protected $fillable = ["name" , "slug" , "description"];


    public function permission(){
        return $this->hasOne(Permission::class);
    }

    public static function getDeputyPrincipalIds(){
            $roleId= DB::table('roles')->where('slug', 'vice_principal')->pluck('id');
            $deputyPrincipalIds=DB::table('user_role')->where('role_id', $roleId)->pluck('user_id');;
            return $deputyPrincipalIds;
    }
}
