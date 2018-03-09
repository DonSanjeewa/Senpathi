<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $fillable = [
        'name'
    ];

    /**
     * Get the class record associated with the grade.
     */
    public function classRooms() {
        return $this->hasMany(ClassRoom::class);
    }
}
