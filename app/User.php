<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = "users";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname', 'lname', 'email', 'username', 'gender', 'password', 'active', 'picture', 'registered_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get the salaryRequests for the user.
     */

    public function salaryRequests()
    {
        return $this->hasMany('App\SalaryRequest');
    }


    public function registered()
    {
        return Carbon::parse($this->registered_at)->toDayDateTimeString();
    }

    /**
     * Get the teacher record associated with the user.
     */
    public function teacher()
    {
        return $this->hasOne('App\Teacher');
    }


    public function role()
    {
       $roleRef =  DB::table("user_role")->where("user_id" , $this->id)->first();

       if ($roleRef){
           return Role::find($roleRef->role_id);
       }

       return null;
    }

    public function permissions()
    {
        $role = $this->role();

        if ($role){
            $permissions = DB::table("role_permission")
                                 ->join("roles" , "role_permission.role_id" ,"=" , "roles.id" )
                                 ->join("permissions" , "role_permission.permission_id" ,"=" , "permissions.id" )
                                 ->select("roles.slug AS role_slug" , "permissions.slug AS permission_slug" , "permissions.route_name" , "role_permission.is_able")
                                 ->where("role_permission.role_id" , $role->id)
                                 ->get();

            return $permissions;
        }

        return null;
    }

}
