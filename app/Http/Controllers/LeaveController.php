<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LeaveController extends Controller
{
    //

     public function index()
    {
        $events = Event::all();
        return view('events.index')->with('events', $events);
    }

     public function create()
    {
        return view('leaves.apply');
    }

    public function viewPending()
    {
    	$leaves = DB::table('pending_leaves')->get();
        return view('leaves.viewPending')->with('leaves', $leaves);
    	
    }
}
