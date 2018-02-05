<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class leave extends Model
{
    //
    public function index()
    {

	$leaves = DB::table('pendig_leaves')->get();
    return view('leave.viewPending', ['leaves' => $leaves]);

	}
}

