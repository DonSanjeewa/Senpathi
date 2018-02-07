<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Leave;
use Carbon\Carbon;

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
    	//$users = DB::table('users')->where('id', session()->id)->first();
        //return view('leaves.apply')->with('users', $users);
       	
        return view('leaves.apply');
     
    }

    public function viewPending()
    {
    	$leaves = DB::table('leaves')->get();
        return view('leaves.viewPending')->with('leaves', $leaves);
    	
    }

    public function viewAllLeaves(){

    	$leaves = DB::table('leaves')->get();
        return view('leaves.viewPending')->with('leaves', $leaves);
    }

    public function store(Request $request)
    {	

    	$request['from'] = $this->formatDateTime($request->input('start_date'));
    	$request['to']   = $this->formatDateTime($request->input('end_date'));

    	$days = $request['to']->diffInDays($request['from']);	
    		
    	Leave::create([
    		'teacher_id' => $request->user()->id,
            'leave_id' => $request->input('102'),
            'days' => '$days',
            'from' => $request->input('from'),
            'to' => $request->input('to'),	
            'status' => 'pending',
            
    	]);
    	return redirect()->route('leaves.viewPending');
    }

    private function formatDateTime($date)
    {
        $date = Carbon::parse($date);
       
        return Carbon::create(
        	$date->year,
            $date->month,
            $date->day
            );
    }

}

