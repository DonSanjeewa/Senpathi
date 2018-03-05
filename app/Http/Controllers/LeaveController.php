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
                        ->groupBy ('leave_id')
                        ->get();
                        
        return view('leaves.apply')->with('leaveAmount',$leaveAmount);

    }

    public function Pending()
    {


        $userName = Auth::user()->username;
        if($userName == "viceprincipal"){
        $pending_leaves = DB::table('leaves')
                         ->join('users','leaves.teacher_id','users.id')
                         ->where('leaves.status','pending')
                         ->select(
                                'users.fname',
                                'users.lname',
                                'users.id as userID',
                                'leaves.from',
                                'leaves.to',
                                'leaves.days',
                                'leaves.status',
                                'leaves.id as leaveid',
                                'leaves.leave_id' 
                        )
                         ->get();

        return view('leaves.Pending')->with('leaves',$pending_leaves);
    }

      if($userName == "superadmin"){
        $pending_leaves = DB::table('leaves')
                         ->join('users','leaves.teacher_id','users.id')
                         ->where('leaves.status','Vice Principal Approved')
                         ->select(
                                'users.fname',
                                'users.lname',
                                'users.id as userID',
                                'leaves.from',
                                'leaves.to',
                                'leaves.days',
                                'leaves.status',
                                'leaves.id as leaveid',
                                'leaves.leave_id' 
                        )
                         ->get();

        return view('leaves.Pending')->with('leaves',$pending_leaves);
    }
    	
    }

    public function cancel($leaveID){

        $query =  DB::table('leaves')
                 ->where('leaves.id',$leaveID)
                 ->delete();

        return $this->pending();
    }

    public function all(){
        $userID = Auth::user()->id;
    	//$leaves = DB::table('leaves')->get();
        $leaves = DB::table('leaves')
                         ->join('users','leaves.teacher_id', '=' ,'users.id')
                         ->where('users.id',$userID)
                         ->get();
        return view('leaves.all')->with('leaves', $leaves);
    }

    public function report(){

        $leaves = DB::table('leaves')
                         ->join('users','leaves.teacher_id', '=' ,'users.id')
                         ->get();
        return view('leaves.report')->with('leaves', $leaves);

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
    	return redirect()->route('leaves.all');
    }

    public function approve($userID){

        $userName = Auth::user()->username;
       
        if($userName == 'viceprincipal'){

           $query = DB::table('leaves')
                    ->where('id', $userID)
                    ->update(['status' => "Vice Principal Approved"]);

           return redirect()->route('leaves.pending');
       }
       if($userName == 'superadmin'){

           $query = DB::table('leaves')
                    ->where('id', $userID)
                    ->update(['status' => "Approved"]);

           return redirect()->route('leaves.pending');
       }

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

