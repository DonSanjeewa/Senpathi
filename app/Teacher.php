<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nic', 'name', 'gender', 'grade', 'medium', 'contact'
    ];
}
