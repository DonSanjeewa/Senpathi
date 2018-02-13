<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Approval extends Model
{
    protected $fillable = ["reference_class" , "reference_id" , "approvers" , "status"];


    public static function approve(){


    }

    public static function reject(){


    }

}
