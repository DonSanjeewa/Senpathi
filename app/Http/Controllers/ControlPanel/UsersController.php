<?php

namespace App\Http\Controllers\ControlPanel;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function  index(){

        $users = User::all();

        return view("control-panel.users.index" , compact("users"));
    }


    public function create(){
        return view("control-panel.users.create");
    }


    public function edit(Request $request , User $user){
        dd($user);
    }
}
