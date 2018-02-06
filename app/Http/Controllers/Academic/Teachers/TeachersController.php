<?php

namespace App\Http\Controllers\Academic\Teachers;

use App\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeachersController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();
        return view('academic.teachers.index')->with('teachers', $teachers);

    }

    /**
     * Show single available teacher in dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($teacher)
    {
        $teacher = Teacher::where('id', $teacher)->first();
        return view('academic.teachers.show')->with('teacher', $teacher);
    }
}
