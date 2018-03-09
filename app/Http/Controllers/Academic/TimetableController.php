<?php

namespace App\Http\Controllers\Academic;

use App\Grade;
use App\AcademicYear;
use App\Subject;
use App\Teacher;
use App\TeacherSubject;
use App\Timetable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TimetableController extends Controller
{
    /**
     * Show all available teachers in dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $timetables = Timetable::select([
            'academic_years_id',
            'class_id'
        ])->groupBy('academic_years_id')
            ->groupBy('class_id')
            ->get();
        return view('timetable.index')->with('timetables', $timetables);
    }

    /**
     * Show create timetable interface.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grades = Grade::all();
        $years = AcademicYear::all();
        $data = [];
        foreach ($grades as $grade) {
            $data[$grade->id] = $grade->classRooms;
        }
        return view('timetable.create')
            ->with('grades', $grades)
            ->with('data', json_encode($data))
            ->with('years', $years);
    }


    /**
     *Store timetable details.
     *
     */
    public function store(Request $request)
    {
        $request->validate([
            'year' => 'required',
            'grade' => 'required',
            'class' => 'required'
        ]);

        $timetable = Timetable::where([
            'academic_years_id' => $request->input('year'),
            'class_id' => $request->input('class'),
        ])->exists();

        if (!$timetable) {
            Timetable::create([
                'academic_years_id' => $request->input('year'),
                'class_id' => $request->input('class'),
            ]);
        }

        return redirect()
            ->route('academic.timetables.show', [
                'year' => $request->input('year'),
                'class' => $request->input('class')
            ]);
    }

    /**
     * Show single available timetable in dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($year, $class)
    {
        $periods = Timetable::where('academic_years_id', $year)->where('class_id', $class)->get();
        $data = [];

        foreach ($periods as $period) {
            $data[$period->period_id] = $period;
        }

        return view('timetable.show')
            ->with('data', $data)
            ->with('year', $year)
            ->with('class', $class);
    }

    /**
     * Edit period for class room.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($year, $class, $period)
    {
        $timetable = Timetable::where('academic_years_id', $year)
            ->where('class_id', $class)
            ->first();

        $teachers = TeacherSubject::all();
//        TODO check for teacher type
        $data = [];
        foreach ($teachers as $teacher) {
            if (!array_key_exists($teacher->teacher_id, $data)) {
                $data[$teacher->teacher_id]['subjects'] = [];
                $data[$teacher->teacher_id]['self'] = $teacher;
            }
            array_push($data[$teacher->teacher_id]['subjects'], $teacher->subject);
        }

        return view('timetable.edit')
            ->with('timetable', $timetable)
            ->with('period', $period)
            ->with('teachers', $data);
    }

    /**
     * Save period in timetable
     *
     * @param Request $request
     * @return $this
     */
    public function update(Request $request)
    {
        $count = Timetable::where([
            'teacher_id' => $request->input('teacher'),
            'period_id' => $request->input('period')
        ])->count();

        if ($count > 0) {
            return back()->withErrors([
                'errors' => 'Teacher is already assigned'
            ]);
        }

        $request->validate([
            'period' => 'required',
            'subject' => 'required',
        ]);

        Timetable::updateOrCreate([
            'academic_years_id' => $request->input('year'),
            'class_id' => $request->input('class'),
            'period_id' => $request->input('period')],
            [
                'teacher_id' => $request->input('teacher'),
                'subject_id' => $request->input('subject'),
            ]);

        return redirect()->route('academic.timetables.show', [
            'year' => $request->input('year'),
            'class' => $request->input('class')
        ]);
    }


    /**
     * Delete a period from time table
     *
     * @param $year
     * @param $class
     * @param $period
     * @return \Illuminate\Http\RedirectResponse
     */
    public function remove($year, $class, $period)
    {
        Timetable::where([
            'class_id' => $class,
            'period_id' => $period,
            'academic_years_id' => $year
        ])->delete();

        return redirect()->route('academic.timetables.show', [
            'year' => $year,
            'class' => $class
        ]);
    }
}
