<?php

namespace App\Http\Controllers\ControlPanel;

use App\Role;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function  index(){

        $users = User::all();

        return view("control-panel.users.index" , compact("users"));
    }


    public function create(){

        $roles = Role::all();
        $hasData = false;

        return view("control-panel.users.create" , compact("roles","hasData"));
    }

    public function store(Request $request){

        request()->validate([
            
                        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
                    ]);
            
        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('img/users'), $imageName);
                   

        $this->validator($request);

        $user = User::create([
            "fname" => $request->input("fname"),
            "lname" => $request->input("lname"),
            "username" => $request->input("username"),
            "password" => bcrypt($request->input("password")),
            "registered_at" => Carbon::now(),
            "active" => true,
            "picture" => $imageName
        ]);

        DB::table("user_role")->insert([
            "user_id" => $user->id,
            "role_id" => $request->input("role"),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        return redirect()->route("control-panel.users.index");
    }


    public function edit(User $user){

        $roles = Role::all();
        $userDetails=DB::table('users')->select('users.*','user_role.role_id')
                                        ->leftJoin('user_role', 'user_role.user_id', '=', 'users.id')
                                        ->where('users.id',$user->id)->get();
        $records = $userDetails[0];
        $hasData = true;

        return view("control-panel.users.edit" , compact("roles","records","hasData"));
    }


    private function validator(Request $request){

        $request->validate([
            "fname"=> "required|string|max:255",
            "lname"=> "required|string|max:255",
            "username"=> "required|string|max:255",
            "password" => "required|string|min:6|confirmed",
            "role" => "required",
        ]);

    }

    public function active(User $user){

        User::where('id', $user->id )
                ->update(['active' => 1]);
        
        $users = User::all();
        return view("control-panel.users.index" , compact("users"));

    }

    public function deactive(User $user){

        User::where('id', $user->id )
                ->update(['active' => 0]);

        $users = User::all();
        return view("control-panel.users.index" , compact("users"));
    }

    public function imageUploadPost()
    
        {

            return "jfhdf";
    
            // request()->validate([
    
            //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    
            // ]);
    
    
    
            // $imageName = time().'.'.request()->image->getClientOriginalExtension();
    
            // request()->image->move(public_path('images'), $imageName);
    
    
    
            // return back()
    
            //     ->with('success','You have successfully upload image.')
    
            //     ->with('image',$imageName);
    
        }
        
}
