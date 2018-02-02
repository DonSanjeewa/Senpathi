<?php

namespace App\Http\Controllers;

use App\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Show all available events in dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::where('deleted', false)->get();
        return view('events.index')->with('events', $events);
    }

    /**
     * Show single available events in dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($event)
    {
        $event = Event::where('id', $event)->where('deleted', false)->first();
        return view('events.show')->with('event', $event);
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


    /**
     * Store event details.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->filled('start_date') && $request->filled('end_date')) {
            $request['starts_at'] = $this->formatDateTime($request->input('start_date'), $request->input('start_time'));
            $request['ends_at'] = $this->formatDateTime($request->input('end_date'), $request->input('end_time'));
        }

        $request->validate([
            'event_name' => 'required|max:100',
            'event_location' => 'required|max:100',
            'start_date' => 'required',
            'start_time' => 'required',
            'end_date' => 'required',
            'end_time' => 'required',
            'ends_at' => 'after:starts_at',
            'event_description' => 'max:255',
        ]);

        Event::create([
            'user_id' => $request->user()->id,
            'name' => $request->input('event_name'),
            'location' => $request->input('event_location'),
            'starts_at' => $request->input('starts_at'),
            'ends_at' => $request->input('ends_at'),
            'description' => $request->input('event_description'),
            'deleted' => false
        ]);

        return redirect()->route('events.index');
    }


    /**
     * Delete an event
     *
     * @param $event
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($event)
    {
        Event::where('id', $event)->update(['deleted' => true]);
        return redirect()->route('events.index');
    }

    /**
     * Merge and converts time to IST
     *
     * @param $date
     * @param $time
     * @return Carbon object with local time
     */
    private function formatDateTime($date, $time)
    {
        $date = Carbon::parse($date);
        $time = Carbon::parse($time);

        return Carbon::create($date->year,
            $date->month,
            $date->day,
            $time->hour,
            $time->minute, 0,
            'Asia/Colombo');
    }
}
