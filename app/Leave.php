<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class leave extends Model
{
    //

	
	protected $fillable = [
        'teacher_id', 'leave_id', 'days','from','to', 'status','next_approval'
    ];


    public function index()
    {

	$leaves = DB::table('leaves')->get();
    return view('leave.viewPending', ['leaves' => $leaves]);
    
	}
}

