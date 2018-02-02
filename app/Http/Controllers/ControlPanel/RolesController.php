<?php

namespace App\Http\Controllers\ControlPanel;

use App\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RolesController extends Controller
{
    public function index(){

        $roles = Role::all();

        return view("control-panel.roles.index" , compact("roles"));
    }
}
