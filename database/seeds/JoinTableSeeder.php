<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JoinTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //TODO Automate hardcoded values

        DB::table("user_role")->insert([
            "user_id" => 1,
            "role_id" => 1,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        // role permissions table seeders
        DB::table("role_permission")->insert([
            "role_id" => 1,
            "permission_id" => 1,
            "is_able" => true,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        
        DB::table("role_permission")->insert([
            "role_id" => 2,
            "permission_id" => 1,
            "is_able" => true,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("role_permission")->insert([
            "role_id" => 3,
            "permission_id" => 1,
            "is_able" => true,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("role_permission")->insert([
            "role_id" => 4,
            "permission_id" => 1,
            "is_able" => true,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("role_permission")->insert([
            "role_id" => 5,
            "permission_id" => 1,
            "is_able" => true,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("role_permission")->insert([
            "role_id" => 6,
            "permission_id" => 1,
            "is_able" => true,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

              
    }
}
