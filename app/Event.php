<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'location', 'description','starts_at','ends_at','user_id'
    ];

    /**
     * Get the user record associated with the event.
     */
    public function user() {
        return $this->belongsTo(User::class);
    }
}