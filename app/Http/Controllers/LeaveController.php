<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Leave;
use Carbon\Carbon;

class LeaveController extends Controller
{

    public function index(){
        $leaves = DB::table('leaves')->get();
        return view('leaves.all')->with('leaves', $leaves);
    }


     public function create()
    {
        $userID = Auth::user()->id;
        $leaveAmount =  DB::table('leaves')
                        ->select('leave_id',DB::raw('SUM(days) as sum '))
                        ->where('teacher_id',$userID)
                        ->groupBy('leave_id')
                        ->get();

        return view('leaves.apply')->with('leaveAmount',$leaveAmount);

    }

    public function Pending()
    {

        $userID = Auth::user()->id;
        $type = DB::table('roles')
                         ->where('id',$userID)
                         ->select('slug')
                         ->first();
       
    	$query = DB::table('leaves');
        $query -> where('status','pending');
        $pending_leaves = $query->get();
        return view('leaves.Pending')->with('leaves', compact($pending_leaves,$type));
    	
    }

    public function all(){

    	//$leaves = DB::table('leaves')->get();
        $leaves = DB::table('leaves')
                         ->join('users','leaves.teacher_id', '=' ,'users.id')
                         -> where('leaves.status','pending')
                         ->get();
        return view('leaves.all')->with('leaves', $leaves);
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

