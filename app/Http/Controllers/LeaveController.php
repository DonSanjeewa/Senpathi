<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Leave;
use Carbon\Carbon;

class LeaveController extends Controller
{
    
     public function create()
    {
       	
        return view('leaves.apply');
     
    }

    public function Pending()
    {
    	$leaves = DB::table('leaves')->get();
        return view('leaves.Pending')->with('leaves', $leaves);
    	
    }

    public function viewAllLeaves(){

    	$leaves = DB::table('leaves')->get();
        return view('leaves.pending')->with('leaves', $leaves);
    }

    public function store(Request $request)
    {	

    	$request['from'] = $this->formatDateTime($request->input('start_date'));
    	$request['to']   = $this->formatDateTime($request->input('end_date'));

    	$days = $request['to']->diffInDays($request['from']);	
    	
    	Leave::create([
    		'teacher_id' => $request->user()->id,
            'leave_id' => $request->input('leave_id'),
            'days' => $days,
            'from' => $request->input('from'),
            'to' => $request->input('to'),	
            'status' => 'pending',
            'next_approval' => 1
            
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

