<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TimeTable extends Model
{
    protected $fillable = [
        'teacher_id',
        'subject_id',
        'period_id',
        'grade_id',
        'class_id',
        'academic_year'
    ];
}
