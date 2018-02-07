<?php

namespace App\Http\Controllers;

use App\Grade;
use Illuminate\Http\Request;

class TimetableController extends Controller
{
    /**
     * Show all available teachers in dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('timetable.index');
    }

    /**
     * Show create timetable interface.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grades = Grade::all();

        $data = [];
        foreach ($grades as $grade) {
            $data[$grade->id] = $grade->classRooms;
        }
        return view('timetable.create')->with('grades', $grades)->with('data', json_encode($data));
    }


    /**
     *Store event details.
     *
     */
    public function store(Request $request)
    {
        dd($request->all());
    }
}
