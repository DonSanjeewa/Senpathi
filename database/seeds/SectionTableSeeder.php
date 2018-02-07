<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SectionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("sections")->insert([
            "name" => "1/5",
            "slug" => "section",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("sections")->insert([
            "name" => "6/7",
            "slug" => "section",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("sections")->insert([
            "name" => "8/9",
            "slug" => "section",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("sections")->insert([
            "name" => "10/11",
            "slug" => "section",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("sections")->insert([
            "name" => "A/L Science",
            "slug" => "section",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("sections")->insert([
            "name" => "A/L Commerce",
            "slug" => "section",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("sections")->insert([
            "name" => "A/L Arts",
            "slug" => "section",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);
    }
}
