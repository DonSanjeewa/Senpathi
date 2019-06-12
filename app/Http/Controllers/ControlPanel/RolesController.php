<?php

namespace App\Http\Controllers\ControlPanel;

use App\Permission;
use App\Role;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class RolesController extends Controller
{
    public function index(){

        $roles = Role::all();

        return view("control-panel.roles.index" , compact("roles"));
    }

    public function show(Role $role)
    {
        $roleDetails=DB::table('roles')->select('roles.*')
            ->where('roles.id',$role->id)->get();

        $rolePermissions=DB::table('role_permission')->select('role_permission.*')
            ->where('role_permission.role_id',$role->id)->get();

        $permission_ids=[];
        for($x=0;$x<count($rolePermissions);$x++) {
            array_push($permission_ids, $rolePermissions[$x]->permission_id);
        }

        $permissions = Permission::all();
        $roleRecords = $roleDetails[0];

        return view('control-panel.roles.show', compact("permissions","roleRecords","permission_ids"));
    }

    public function create(){

        $hasData = false;
        $permissions = Permission::all();

        return view("control-panel.roles.create" ,  compact("permissions","hasData"));
    }

    public function store(Request $request)
    {
        $this->validator($request);

        $role = Role::create([
            "name" => $request->input("name"),
            "slug" => $request->input("slug"),
            "description" => $request->input("description"),
        ]);

        foreach ($request->input("permissions") as $permissionId => $value){
            DB::table("role_permission")->insert([
                "role_id" => $role->id,
                "permission_id" => $permissionId,
                "is_able" => true,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ]);
        }

        return redirect()->route("control-panel.roles.index");

    }

    public function edit(Role $role)
    {
        $roleDetails=DB::table('roles')->select('roles.*')
            ->where('roles.id',$role->id)->get();

        $rolePermissions=DB::table('role_permission')->select('role_permission.*')
            ->where('role_permission.role_id',$role->id)->get();

        $permission_ids=[];
        for($x=0;$x<count($rolePermissions);$x++) {
            array_push($permission_ids, $rolePermissions[$x]->permission_id);
        }

        $permissions = Permission::all();
        $roleRecords = $roleDetails[0];
        $hasData = true;

        return view('control-panel.roles.edit', compact("permissions","hasData","roleRecords","permission_ids"));
    }

    public function update(Request $request,$id)
    {
        $this->validator($request);

        Role::where('id', $id)->update([
            "name" => $request->input("name"),
            "slug" => $request->input("slug"),
            "description" => $request->input("description")
        ]);

        DB::table("role_permission")->where('role_id', $id)->delete();

        foreach ($request->input("permissions") as $permissionId => $value){
            DB::table("role_permission")->insert([
                "role_id" => $id,
                "permission_id" => $permissionId,
                "is_able" => true,
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ]);
        }

        return redirect()->route('control-panel.roles.show', ['role' => $id]);
    }


    public function validator(Request $request)
    {
        return $request->validate([
            'name' => 'required|string|max:255|unique:roles,name',
            'slug' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

    }

    public function delete(Role $role)
    {
        Role::where('id', $role->id)->delete();

        DB::table("role_permission")->where('role_id', $role->id)->delete();

        return redirect()->route('control-panel.roles.index');
    }

    public function underconstruction(){


        return view('home.underconstruction');
    }

}
