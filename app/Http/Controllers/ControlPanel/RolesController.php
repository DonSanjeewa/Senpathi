<?php

namespace App\Http\Controllers\ControlPanel;

use App\Permission;
use App\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RolesController extends Controller
{
    public function index(){

        $roles = Role::all();

        return view("control-panel.roles.index" , compact("roles"));
    }

    public function create(){

        $permissions = Permission::all();

        return view("control-panel.roles.create" ,  compact("permissions"));
    }

    public function store(Request $request)
    {

        $this->validator($request);

        Role::create([
            "name" => $request->input("name"),
            "slug" => $request->input("slug"),
            "description" => $request->input("description"),
        ]);

        return redirect()->route("control-panel.roles.index");

    }


    public function validator(Request $request)
    {
        return $request->validate([
            'name' => 'required|string|max:255|unique:roles,name',
            'slug' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

    }

}
