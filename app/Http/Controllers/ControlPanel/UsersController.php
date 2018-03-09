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

        return view("control-panel.users.create" , compact("roles"));
    }

    public function store(Request $request){

        $this->validator($request);

        $user = User::create([
            "fname" => $request->input("fname"),
            "lname" => $request->input("lname"),
            "username" => $request->input("username"),
            "password" => bcrypt($request->input("email")),
            "registered_at" => Carbon::now(),
            "active" => true
        ]);

        DB::table("user_role")->insert([
            "user_id" => $user->id,
            "role_id" => $request->input("role"),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        return redirect()->route("control-panel.users.index");
    }


    public function edit(Request $request , User $user){
        dd($user);
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
}
