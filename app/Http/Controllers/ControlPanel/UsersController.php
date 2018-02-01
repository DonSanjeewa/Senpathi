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
}
