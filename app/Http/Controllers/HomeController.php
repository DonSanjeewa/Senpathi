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
        $upCommingEvents = $this->getUpcommingEvents();
        $teachersCount=Teacher::get()->count();
        $eventsCount=Event::get()->count();
        $leaveCount=DB::table('leaves')
                        ->where('teacher_id', '=', $userId)
                        ->get()->count();

        return view('home.index')->with('eventsCount',$eventsCount)
                                       ->with('upCommingEvents',$upCommingEvents)
                                       ->with('teachersCount',$teachersCount)
                                       ->with('leaveCount', $leaveCount);
    }

    public function getUpcommingEvents(){

        $dt = Carbon::now();
        $current = Event::where('starts_at','>=',$dt)->get();
        return $current;
    }

}
