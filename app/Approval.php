<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Approval;

class Approval extends Model
{
    protected $fillable = ["reference_class" , "reference_id" , "approvers" , "status"];


    public static function approve(){


    }

    public static function reject(){


    }

    public static function getPendingApprovals(){

        // $userId=auth()->user()->id;
        
    
        $users = DB::table('approvals')
                ->select('users.username','approvals.status')
                ->leftJoin('users', 'users.id', '=', 'approvals.reference_id')
                ->get();

               
    return $users;

   
    }

}
