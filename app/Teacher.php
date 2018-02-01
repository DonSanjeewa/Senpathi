<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //
    protected $fillable = [
        'nic', 'name', 'gender','grade','medium','contact'
    ];
}
