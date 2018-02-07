<?php

namespace App\Http\Controllers\ControlPanel;

use App\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class PermissionsController extends Controller
{
    public function index()
    {

        $permissions = Permission::all();

        return view("control-panel.permissions.index", compact("permissions"));
    }


    public function create()
    {
        return view("control-panel.permissions.create");
    }

    public function store(Request $request)
    {

        $this->validator($request);

        Permission::create([
            "name" => $request->input("name"),
            "slug" => $request->input("slug"),
            "route_name" => $request->input("route_name"),
            "description" => $request->input("description"),
        ]);

        return redirect()->route("control-panel.permissions.index");

    }


    public function validator(Request $request)
    {
        return $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'route_name' => 'required|string|max:255|unique:permissions,route_name',
            'description' => 'nullable|string',
        ]);

    }
}
