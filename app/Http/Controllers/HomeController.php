<?php

namespace App\Http\Controllers;

use App\Event;
use App\Teacher;
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
        $upCommingEvents = $this->getUpcommingEvents();
        $teachersCount=Teacher::get()->count();
        $eventsCount=Event::get()->count();
        return view('home.index')->with('eventsCount',$eventsCount)
                                       ->with('upCommingEvents',$upCommingEvents)
                                       ->with('teachersCount',$teachersCount);
    }

    public function getUpcommingEvents(){

        $dt = Carbon::now();
        $current = Event::where('starts_at','>=',$dt)->get();
        return $current;
    }

}
