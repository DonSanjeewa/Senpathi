<?php

namespace App\Http\Controllers;
use Auth;
use DB;
use App\Event;
use App\Teacher;
use App\Leave;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId = Auth::id(); 
        $roleId = DB::table('user_role')
                ->where('user_id','=', $userId)->get();

        $roleObj = DB::table('roles')
                ->where('id','=', $roleId[0]->role_id)->get();

        $role= $roleObj[0]->name;

        $upCommingEvents = $this->getUpcommingEvents();
        $teachersCount=Teacher::where('approval', '=', 'pending')->get()->count();
        $eventsCount=Event::where('deleted', false)->get()->count();
        $casualLeaves=DB::table('leaves')
                    ->where('teacher_id', '=', $userId)
                    ->where('leave_id', '=', 1)
                    ->get()->count();

        $medicalLeaves=DB::table('leaves')
                    ->where('teacher_id', '=', $userId)
                    ->where('leave_id', '=', 2)
                    ->get()->count();
        
        $maternityLeaves=DB::table('leaves')
                    ->where('teacher_id', '=', $userId)
                    ->where('leave_id', '=', 3)
                    ->get()->count();
        
        $leaveCount=DB::table('leaves')
                        ->where('status', '=', 'pending')
                        ->get()->count();

        return view('home.index', compact('eventsCount','upCommingEvents','teachersCount','leaveCount','casualLeaves','medicalLeaves','maternityLeaves','role'));
    
    }

    public function getUpcommingEvents(){

        $dt = Carbon::now();
        $current = Event::where('starts_at','>=',$dt)->where('deleted', false)->get();
       
    return $current;
    }

}
