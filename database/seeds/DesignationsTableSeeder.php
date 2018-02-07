<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DesignationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("Designations")->insert([
            "name" => "Principal",
            "slug" => "designation",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("Designations")->insert([
            "name" => "Acting Principal",
            "slug" => "designation",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("Designations")->insert([
            "name" => "Deputy Principal",
            "slug" => "designation",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("Designations")->insert([
            "name" => "Acting Deputy Principal",
            "slug" => "designation",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("Designations")->insert([
            "name" => "Assistant Principal",
            "slug" => "designation",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("Designations")->insert([
            "name" => "Acting Assistant Principal",
            "slug" => "designation",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("Designations")->insert([
            "name" => "Teacher",
            "slug" => "designation",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);



    }
}
