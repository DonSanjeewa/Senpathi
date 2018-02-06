<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GradeClassRoom extends Model
{
    protected $fillable = [
        'grade_id',
        'class_id'
    ];
}
