<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table("permissions")->insert([
           "name" => "All Privileges",
           "permissions" => json_encode("*"),
           "description" => "Access for all the application routes have been granted.",
           "created_at" => Carbon::now(),
           "updated_at" => Carbon::now()
       ]);
    }
}
