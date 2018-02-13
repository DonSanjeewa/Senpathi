<?php

namespace App\Http\Controllers\Academic;

use App\Events\ApprovalRequired;
use App\Subject;
use App\Teacher;
use Carbon\Carbon;
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

    public function create()
    { 
        $nationalities = DB::table("nationalities")->get();
        $religions = DB::table("religions")->get();
        $designations = DB::table("designations")->get();
        $sections = DB::table("sections")->get();
        $subjects = Subject::all();
        $serviceGrades = DB::table("service_grades")->get();
        $academicRoles = DB::table("academic_roles")->get();

        return view('academic.teachers.create' , compact(
            "nationalities" ,
                 "religions" ,
                   "designations" ,
                   "sections" ,
                   "subjects",
                   "serviceGrades" ,
                   "academicRoles"
        ));
    }


    public function store(Request $request){

       event( new ApprovalRequired(Teacher::class , 1 , [1,2]));


        return;

        $teacher = Teacher::create([
            'name_initials'         => $request->input("name_initials"),
            'full_name'             => $request->input("full_name"),
            'nic'                   => $request->input("nic") ,
            'dob'                   => $this->parseDateString($request->input("dob")) ,
            'address'               => $request->input("address"),
            'contact_mobile'        => $request->input("contact_mobile"),
            'contact_home'          => $request->input("contact_home"),
            'gender'                => $request->input("gender"),
            'email'                 => $request->input("email"),
            'civil_status'          => $request->input("civil_status"),
            'nationality_id'        => $request->input("nationality"),
            'religion_id'           => $request->input("religion"),
            'widow_and_orphan_no'   => $request->input("widow_and_orphan_no") ,
            'salary_compute_no'     => $request->input("salary_compute_no"),
            'signature_no'          => $request->input("signature_no"),
            'gov_reg_no'            => $request->input("gov_reg_no"),
            'personal_file_no'      => $request->input("personal_file_no"),
            'designation_id'        => $request->input("designation"),
            'section_id'            => $request->input("section"),
            'medium'                => $request->input("medium"),
            'joined_at'             => $this->parseDateString($request->input("joined_at")) ,
            'service_grade_id'      => $request->input("service_grade"),
            'nature_of_appointment' => $request->input("nature_of_appointment"),
            'current_role'          => $request->input("current_role") ,
            'current_type'          => $request->input("current_type"),
            'salary'                => $request->input("salary"),
            'first_appointment_at'  => $this->parseDateString($request->input("first_appointment_at"))
        ]);

        //TODO validation for exp and qualifications

        foreach (range(1 , count($request->input("employer"))) as $i){
            DB::table("teacher_experiences")->insert([
                "teacher_id" => $teacher->id,
                "employer"   => $request->input("employer")[$i],
                "subject"    => $request->input("subject")[$i],
                "years"      => $request->input("years")[$i]
            ]);
        }

        foreach ($request->input("professional-qualification") as $qualification){
            DB::table("teacher_qualifications")->insert([
                "teacher_id" => $teacher->id,
                "qualification"   => $qualification,
                "type"    => "professional"
            ]);
        }

        foreach ($request->input("educational-qualification") as $qualification){
            DB::table("teacher_qualifications")->insert([
                "teacher_id" => $teacher->id,
                "qualification"   => $qualification,
                "type"    => "educational"
            ]);
        }

        return redirect()->route("academic.teachers.index");


    }


    public function show(Teacher $teacher)
    {
        return view('academic.teachers.show' , compact("teacher"));
    }

    private function validator(Request $request){
        $request->validate([
            "full_name"             => "required|string|max:255",
            "name_initials"         => "required|string|max:255",
            "nic"                   => "required|string|max:10",
            "dob"                   => "required",
            "address"               => "required|string|max:255",
            "contact_mobile"        => "required|string|max:10",
            "contact_home"          => "required|string|max:10",
            "gender"                => "required",
            "email"                 => "nullable|email|unique:users,email",

            "widow_and_orphan_no"   => "required|string|max:255",
            "salary_compute_no"     => "required|string|max:255",
            "signature_no"          => "required|string|max:255",
            "gov_reg_no"            => "required|string|max:255",
            "personal_file_no"      => "required|string|max:255",

            "joined_at"             => "required",

            "salary"                => "required|string|max:255",
            "first_appointment"     => "required"
        ]);
    }

    private function parseDateString($dateString){
        return Carbon::parse($dateString)->toDateString();
    }



}
