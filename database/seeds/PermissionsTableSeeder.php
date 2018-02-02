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
           "name" => "All Routes",
           "slug" => "all_routes",
           "route_name" => "*",
           "description" => "All routes.",
           "created_at" => Carbon::now(),
           "updated_at" => Carbon::now()
       ]);
    }
}
