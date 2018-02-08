<?php

namespace App\Http\Controllers\Academic;

use App\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class TeachersController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();
        return view('academic.teachers.index')->with('teachers', $teachers);

    }

    public function create(){

        $nationalities = DB::table("nationalities")->all();
        $religions = DB::table("religions")->all();
        $sections = DB::table("sections")->all();
        $serviceGrades = DB::table("service_grades")->all();
        $academicRoles = DB::table("academic_roles")->all();

        return view('academic.teachers.create');
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
