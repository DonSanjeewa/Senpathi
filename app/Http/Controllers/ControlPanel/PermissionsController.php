<?php

namespace App\Http\Controllers\ControlPanel;

use App\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PermissionsController extends Controller
{
    public function index(){

        $permissions = Permission::all();

        return view("control-panel.permissions.index" , compact("permissions"));
    }
}
