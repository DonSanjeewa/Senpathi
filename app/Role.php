<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    protected $fillable = ["name" , "slug" , "description"];


    public function permission(){
        return $this->hasOne(Permission::class);
    }
}
