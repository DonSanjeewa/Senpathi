<?php

namespace App\Http\Controllers\Academic;

use App\Events\ApprovalRequired;
use App\Events\Approved;
use App\Events\Rejected;
use App\Subject;
use App\Teacher;
use App\Role;
use App\Approval;
use Auth;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class TeachersController extends Controller
{
    public function index()
    {
        $this->restrict_user(Route::currentRouteName());
        //To check wether the logged user is the super admin
        $userId= Auth::id();
        if ($userId){
        $roleId=DB::table('user_role')->where('user_id',$userId)->get();
        }

        if ($roleId){
        $roleName=(DB::table('roles')->where('id',$roleId[0]->role_id)->get())[0]->name;
        }

        if($roleName){
            $teachers = Teacher::where('deleted', 0)->get();
            return view('academic.teachers.index')->with('teachers', $teachers)
                                                  ->with('roleName', $roleName);
        } else {
            $teachers = Teacher::where('deleted', 0)->get();
            return view('academic.teachers.index')->with('teachers', $teachers);
        }

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
        $roles = DB::table("roles")->get();
        $hasData = false; 

        return view('academic.teachers.create', compact(
            "nationalities",
            "religions",
            "designations",
            "sections",
            "subjects",
            "serviceGrades",
            "academicRoles",
            "roles",
            "hasData"
        ));
    }


    public function store(Request $request)
    {

        $this->validator($request);

        $teacher = Teacher::create([
            'full_name' => $request->input("full_name"),
            'name_initials' => $request->input("name_initials"),
            'nic' => $request->input("nic"),
            'dob' => $this->parseDateString($request->input("dob")),
            'address' => $request->input("address"),
            'contact_mobile' => $request->input("contact_mobile"),
            'contact_home' => $request->input("contact_home"),
            'gender' => $request->input("gender"),
            'email' => $request->input("email"),

            'civil_status' => $request->input("civil_status"),
            'nationality_id' => $request->input("nationality"),
            'religion_id' => $request->input("religion"),

            'widow_and_orphan_no' => $request->input("widow_and_orphan_no"),
            'salary_compute_no' => $request->input("salary_compute_no"),
            'signature_no' => $request->input("signature_no"),
            'gov_reg_no' => $request->input("gov_reg_no"),
            'personal_file_no' => $request->input("personal_file_no"),

            'designation_id' => $request->input("designation"),
            'section_id' => $request->input("section"),
            'medium' => $request->input("medium"),
            'joined_at' => $this->parseDateString($request->input("joined_at")),

            'service_grade_id' => $request->input("service_grade"),
            'nature_of_appointment' => $request->input("nature_of_appointment"),
            'current_role' => json_encode($request->input("current_role")),
            'current_type' => $request->input("current_type"),
            'salary' => $request->input("salary"),
            'first_appointment_at' => $this->parseDateString($request->input("first_appointment_at")),
            'deleted' => false
        ]);


        //To get all the deputy principle IDs

        $deputiPriciples = Role::getDeputyPrincipalIds();

        if ($request->has("employer")) {
            foreach ($request->input("employer") as $expKey => $expVal) {
                DB::table("teacher_experiences")->insert([
                    "teacher_id" => $teacher->id,
                    "employer" => $request->input("employer")[$expKey],
                    "subject" => $request->input("subject")[$expKey],
                    "years" => $request->input("years")[$expKey]
                ]);
            }
        }

        if ($request->has("professional-qualification")) {

            foreach ($request->input("professional-qualification") as $qualification) {
                DB::table("teacher_qualifications")->insert([
                    "teacher_id" => $teacher->id,
                    "qualification" => $qualification,
                    "type" => "professional"
                ]);
            }
        }

        if ($request->has("educational-qualification")) {

            foreach ($request->input("educational-qualification") as $qualification) {
                DB::table("teacher_qualifications")->insert([
                    "teacher_id" => $teacher->id,
                    "qualification" => $qualification,
                    "type" => "educational"
                ]);
            }
        }

        $user = User::create([
            "fname" => $request->input("fname"),
            "lname" => $request->input("lname"),
            "username" => $request->input("username"),
            "password" => bcrypt($request->input("password")),
            "registered_at" => Carbon::now(),
            "active" => true
        ]);

        DB::table("user_role")->insert([
            "user_id" => $user->id,
            "role_id" => $request->input("role"),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);



        //To add a record to approvel table
        event(new ApprovalRequired(Teacher::class, $teacher->id, $deputiPriciples));
        // $this->validator($request); 
        return redirect()->route("academic.teachers.index");

    }


    public function show(Teacher $teacher)
    {
        //return $teacher;

        $allRecords=DB::table('users')->select('users.picture','teachers.*')
                                        ->leftJoin('teachers', 'teachers.user_id', '=', 'users.id')
                                        ->where('teachers.id',$teacher->id)->get();

        $allRecords = $allRecords[0];                     

        return view('academic.teachers.show')->with('teacher', $allRecords);
    }

    public function edit(Teacher $teacher)
    {
        $user_role = '';
        $allRecords = DB::table('users')->select('users.*','teachers.*')
                                        ->leftJoin('teachers', 'teachers.user_id', '=', 'users.id')
                                        ->where('teachers.id',$teacher->id)->get();

        $teacher_experience = DB::table('teacher_experiences')->select('teacher_experiences.*')
                                        ->leftJoin('teachers', 'teachers.id', '=', 'teacher_experiences.teacher_id')
                                        ->where('teachers.id',$teacher->id)->get();

        $teacher_professional_qualification = DB::table('teacher_qualifications')->select('teacher_qualifications.*')
                                        ->leftJoin('teachers', 'teachers.id', '=', 'teacher_qualifications.teacher_id')
                                        ->where('teachers.id',$teacher->id)
                                        ->where('teacher_qualifications.type','professional')->get();

        $teacher_educational_qualification = DB::table('teacher_qualifications')->select('teacher_qualifications.*')
                                        ->leftJoin('teachers', 'teachers.id', '=', 'teacher_qualifications.teacher_id')
                                        ->where('teachers.id',$teacher->id)
                                        ->where('teacher_qualifications.type','educational')->get();

        $user_role_id = DB::table('user_role')->select('user_role.role_id')
                                        ->leftJoin('teachers', 'teachers.user_id', '=', 'user_role.user_id')
                                        ->where('teachers.id',$teacher->id)->get();
        if(count($user_role_id) != 0){
            $user_role = DB::table('roles')->select('roles.*')
                                        ->leftJoin('user_role', 'user_role.role_id', '=', 'roles.id')
                                        ->where('user_role.role_id',$user_role_id[0]->role_id)->get();
            $user_role = $user_role[0];
        }
        

        $allRecords = $allRecords[0];
        $teacher_experiences = '';
        $teacher_professional_qualifications = '';
        $teacher_educational_qualifications = '';
        if(count($teacher_experience) != 0){
            $teacher_experiences = $teacher_experience[0];
        }
        if(count($teacher_professional_qualification) != 0){
            $teacher_professional_qualifications = $teacher_professional_qualification[0];
        }
        if(count($teacher_educational_qualification) != 0){
            $teacher_educational_qualifications = $teacher_educational_qualification[0];
        }
        $nationalities = DB::table("nationalities")->get();
        $religions = DB::table("religions")->get();
        $designations = DB::table("designations")->get();
        $sections = DB::table("sections")->get();
        $subjects = Subject::all();
        $serviceGrades = DB::table("service_grades")->get();
        $academicRoles = DB::table("academic_roles")->get();
        $roles = DB::table("roles")->get();
        $hasData = true;                 

        return view('academic.teachers.edit', compact("allRecords","teacher_experiences","teacher_professional_qualifications","teacher_educational_qualifications","user_role","nationalities","religions","designations","sections","subjects","serviceGrades","academicRoles","roles","hasData"));
    }

    public function update(Request $request,$id)
    {
        $user_info = Teacher::where('id',$id)->select('user_id')->first();

        $this->validator($request);

        Teacher::where('id',$id)->update([
            'full_name' => $request->input("full_name"),
            'name_initials' => $request->input("name_initials"),
            'nic' => $request->input("nic"),
            'dob' => $this->parseDateString($request->input("dob")),
            'address' => $request->input("address"),
            'contact_mobile' => $request->input("contact_mobile"),
            'contact_home' => $request->input("contact_home"),
            'gender' => $request->input("gender"),
            'email' => $request->input("email"),

            'civil_status' => $request->input("civil_status"),
            'nationality_id' => $request->input("nationality"),
            'religion_id' => $request->input("religion"),

            'widow_and_orphan_no' => $request->input("widow_and_orphan_no"),
            'salary_compute_no' => $request->input("salary_compute_no"),
            'signature_no' => $request->input("signature_no"),
            'gov_reg_no' => $request->input("gov_reg_no"),
            'personal_file_no' => $request->input("personal_file_no"),

            'designation_id' => $request->input("designation"),
            'section_id' => $request->input("section"),
            'medium' => $request->input("medium"),
            'joined_at' => $this->parseDateString($request->input("joined_at")),

            'service_grade_id' => $request->input("service_grade"),
            'nature_of_appointment' => $request->input("nature_of_appointment"),
            'current_role' => json_encode($request->input("current_role")),
            'current_type' => $request->input("current_type"),
            'salary' => $request->input("salary"),
            'first_appointment_at' => $this->parseDateString($request->input("first_appointment_at")),
            "updated_at" => Carbon::now()
        ]);


        //To get all the deputy principle IDs

        $deputiPriciples = Role::getDeputyPrincipalIds();

        if ($request->has("employer")) {
            foreach ($request->input("employer") as $expKey => $expVal) {
                DB::table("teacher_experiences")->where('teacher_id',$id)->update([
                    "employer" => $request->input("employer")[$expKey],
                    "subject" => $request->input("subject")[$expKey],
                    "years" => $request->input("years")[$expKey],
                    "updated_at" => Carbon::now()
                ]);
            }
        }

        if ($request->has("professional-qualification")) {

            foreach ($request->input("professional-qualification") as $qualification) {
                DB::table("teacher_qualifications")->where('teacher_id',$id)->update([
                    "teacher_id" => $teacher->id,
                    "qualification" => $qualification,
                    "type" => "professional",
                    "updated_at" => Carbon::now()
                ]);
            }
        }

        if ($request->has("educational-qualification")) {

            foreach ($request->input("educational-qualification") as $qualification) {
                DB::table("teacher_qualifications")->where('teacher_id',$id)->update([
                    "teacher_id" => $teacher->id,
                    "qualification" => $qualification,
                    "type" => "educational",
                    "updated_at" => Carbon::now()
                ]);
            }
        }

        $user = User::where('id',$user_info->user_id)->update([
            "fname" => $request->input("fname"),
            "lname" => $request->input("lname"),
            "username" => $request->input("username"),
            "updated_at" => Carbon::now()
        ]);

        DB::table("user_role")->where('user_id',$user_info->user_id)->update([
            "role_id" => $request->input("role"),
            "updated_at" => Carbon::now()
        ]);



        //To add a record to approvel table
        event(new ApprovalRequired(Teacher::class, $id, $deputiPriciples));
        // $this->validator($request); 
        return redirect()->route("academic.teachers.show",['teacher' => $id]);
    }

    private function validator(Request $request)
    {
        $request->validate([
            "full_name" => "required|string|max:255",
            "name_initials" => "required|string|max:255",
            "nic" => ["required", "regex:/[0-9]{9}[x|X|v|V]$/i", "string", "max:10"],
            "dob" => "required",
            "address" => "required|string|max:255",
            "contact_mobile" => "required|string|max:10",
            "contact_home" => "required|string|max:10",
            "gender" => "required",
            "email" => "nullable|email|unique:teachers,email",

            "widow_and_orphan_no" => "required|string|max:255",
            "salary_compute_no" => "required|string|max:255",
            "signature_no" => "required|string|max:255",
            "gov_reg_no" => "required|string|max:255",
            "personal_file_no" => "required|string|max:255",

            "joined_at" => "required",

            "salary" => "required|string|max:255",
            "first_appointment" => "required",

            "fname" => "required|string|max:255",
            "lname" => "required|string|max:255",
            "username" => "required|string|max:255",
            "password" => "required|string|max:255",
        ]);
    }

    private function parseDateString($dateString)
    {
        return Carbon::parse($dateString)->toDateString();
    }


    public function approvals()
    {

        $userId = auth()->user()->id;

        $allApprovals = DB::table("approvals")->where("status" , "pending")->get();

        $assignedApprovals = [];

        foreach ($allApprovals as $approval){

            if (in_array($userId , json_decode($approval->approvers))){

                   $referencedItem = $approval->reference_class::find($approval->reference_id);

                   $approval->item = $referencedItem;

                   array_push($assignedApprovals , $approval);
            }
        }

        return view('approvals.index' , compact('assignedApprovals'));
    }


    public function approve(Approval $approval){
        event(new Approved($approval->id , auth()->user()->id));
        return back();
    }

    public function reject(Approval $approval){
        event(new Rejected($approval->id , auth()->user()->id));
        return back();
    }

    public function delete(Teacher $teacherId){

        Teacher::where('id', $teacherId->id )
                 ->update(['deleted' => 1]);

                 $userId= Auth::id();
                 if ($userId){
                 $roleId=DB::table('user_role')->where('user_id',$userId)->get();
                 }
         
                 if ($roleId){
                 $roleName=(DB::table('roles')->where('id',$roleId[0]->role_id)->get())[0]->name;
                 }
         
                 if($roleName){
                     $teachers = Teacher::where('deleted', 0)->get();
                     return view('academic.teachers.index')->with('teachers', $teachers)
                                                           ->with('roleName', $roleName);
                 } else {
                     $teachers = Teacher::where('deleted', 0)->get();
                     return view('academic.teachers.index')->with('teachers', $teachers);
                 }

    }

    public function restrict_user($route) {
        $user_id = auth()->user()->id;
        $role_id = '';
        $route_name = '';
        $permissions = '';
        $route_names = '';
        $permission_roles = DB::table('role_permission')->select('role_permission.*')
                                        ->leftJoin('user_role', 'user_role.role_id', '=', 'role_permission.role_id')
                                        ->where('user_role.user_id',$user_id)->get();

        if(count($permission_roles) != 0){
            $role_id = $permission_roles[0]->role_id;
        }

        if($role_id != ''){
            $permissions = DB::table('permissions')->select('permissions.*')
                                        ->leftJoin('role_permission', 'role_permission.permission_id', '=', 'permissions.id')
                                        ->where('role_permission.role_id',$role_id)->get();
        }

        if(count($permissions) != 0 && $permissions != ''){
            $route_names=[];
            for($x=0;$x<count($permissions);$x++) {
                array_push($route_names, $permissions[0]->route_name);
            }
        }

        if(count($route_names) != 0 && $route_names != ''){
            if((in_array($route, $route_names)) || (in_array('*', $route_names))){
                //return redirect()->route("control-panel.roles.index");
                return redirect()->route('control-panel.roles.index');
            }
        }
    }

    public function accessDenied(){
        return view('home.access-denied');
    }

}
