<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
           "fname" => "super",
           "lname" => "admin",
           "username" => "superadmin",
           "password" => bcrypt("password"),
           "active" => true,
           "registered_at" => Carbon\Carbon::now(),
           "updated_at" => Carbon\Carbon::now(),
           "created_at" => Carbon\Carbon::now()
        ]);
    }
}
