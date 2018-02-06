<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserSalaryRequest extends Model
{
    protected $fillable = [
        'user_id', 'salary_request_id', 'next_approval', 'status'
    ];

    /**
     * Get the user record associated with the SalaryRequest.
     */
    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
