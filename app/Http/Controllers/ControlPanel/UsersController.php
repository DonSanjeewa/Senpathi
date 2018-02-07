<?php

namespace App\Http\Controllers\ControlPanel;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    public function  index(){

        $users = User::all();

        return view("control-panel.users.index" , compact("users"));
    }


    public function create(){
        return view("control-panel.users.create");
    }

    public function store(Request $request){
        dd($request->all());
    }


    public function edit(Request $request , User $user){
        dd($user);
    }


    private function validator($data){

        return Validator::make($data , [
            "fname"=> "required|string|max:255",
            "lname"=> "required|string|max:255",
            "username"=> "required|string|max:255",
            "email"=> "nullable|email|unique:users,email",
            "password" => "required|string|min:6|"
        ]);

    }
}
