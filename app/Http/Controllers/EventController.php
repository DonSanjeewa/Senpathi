<?php

namespace App\Http\Controllers;

use App\Event;

class EventController extends Controller
{
    /**
     * Show all available events in dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return view('events.index')->with('events', $events);
    }

    /**
     * Show create event interface.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
    }
}
