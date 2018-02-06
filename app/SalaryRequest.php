<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalaryRequest extends Model
{
    protected $fillable = [
        'consolidated_salary',
        'cost_of_living_allowance',
        'arrears_of_salaries',
        'principal_allowances',
        'other_offers',
        'festival_advance',
        'widow_widower',
        'co_operative_development_cost',
        'festival_cost',
        'special_advance',
        'distress_loan_installment',
        'insurance_premium',
        'property_loan',
        'houses_rent',
        'electricity_bills',
        'stamp_duty',
        'government_bonds_association',
        'premium_rate_of_public_servants',
        'user_id'
    ];

    /**
     * Get the salaryRequestStatus record associated with the SalaryRequest.
     */
    public function salaryRequestStatus()
    {
        return $this->hasOne('App\UserSalaryRequest');
    }

    /**
     * Get the user record associated with the SalaryRequest.
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
