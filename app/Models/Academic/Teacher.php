<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'user_id',
        'signature_no',
        'serial_no',
        'personal_file_no',
        'full_name',
        'name_with_initials',
        'gender',
        'section',
        'teacher_register_no',
        'nic_no',
        'permanent_addr',
        'wnop_no',
        'service',
        'grade',
        'main_subject_id',
        'medium',
        'contact_mobile',
        'contact_home',
        'dob',
        'remarks',
        'civil_status',
        'created_at',
        'updated_at',
        'photo_file_name',
        'religion_id',
        'photo_content_type',
        'photo_data',
        'nationality_id',
        'designation_id',
        'educational_qualific',
        'professional_qualific',
        'promotions',
        'increment_date',
        'duty_assume_date',
        'pension_date',
        'joined_date',
    ];
}
