<?php

namespace App\Http\Controllers\Academic;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Subject;

class StudentsController extends Controller
{
    //
    public function create()
    {
        $nationalities = DB::table("nationalities")->get();
        $religions = DB::table("religions")->get();
        $designations = DB::table("designations")->get();
        $sections = DB::table("sections")->get();
        $subjects = Subject::all();
        $serviceGrades = DB::table("service_grades")->get();
        $academicRoles = DB::table("academic_roles")->get();
        $roles = DB::table("roles")->get();

        return view('academic.students.create', compact(
            "nationalities",
            "religions",
            "designations",
            "sections",
            "subjects",
            "serviceGrades",
            "academicRoles",
            "roles"
        ));
    }
}


