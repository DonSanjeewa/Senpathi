<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'user_id',
        'name_initials',
        'full_name',
        'nic',
        'dob' ,
        'address',
        'gender',
        'email',
        'contact_mobile',
        'contact_home',
        'civil_status',
        'nationality_id' ,
        'religion_id' ,
        'widow_and_orphan_no' ,
        'salary_compute_no',
        'signature_no',
        'gov_reg_no',
        'personal_file_no' ,
        'designation_id',
        'section_id',
        'medium',
        'joined_at' ,
        'service_grade_id',
        'nature_of_appointment',
        'current_role' ,
        'current_type',
        'salary',
        'first_appointment_at',
        "approval"
    ];
}
