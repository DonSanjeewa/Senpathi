<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
    protected $fillable = [
        'teacher_id',
        'subject_id',
        'period_id',
        'class_id',
        'academic_years_id'
    ];


    public function teacher() {
        return $this->belongsTo(Teacher::class);
    }

    public function subject() {
        return $this->belongsTo(Subject::class);
    }

    public function academic() {
        return $this->belongsTo(AcademicYear::class, 'academic_years_id', 'id');
    }

    public function classRoom() {
        return $this->belongsTo(ClassRoom::class, 'class_id', 'id');
    }
}
