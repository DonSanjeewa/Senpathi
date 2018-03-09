<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassRoom extends Model
{
    protected $fillable = [
        'name',
        'grade_id'
    ];

    /**
     * Get the grade record associated with the class.
     */
    public function grade() {
        return $this->belongsTo(Grade::class);
    }
}
