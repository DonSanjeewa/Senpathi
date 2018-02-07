<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ReligionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("religions")->insert([
            "name" => "Buddhism",
            "slug" => "religion",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("religions")->insert([
            "name" => "Hinduism",
            "slug" => "religion",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("religions")->insert([
            "name" => "Islam",
            "slug" => "religion",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("religions")->insert([
            "name" => "Catholicism",
            "slug" => "religion",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("religions")->insert([
            "name" => "Christianity",
            "slug" => "religion",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("religions")->insert([
            "name" => "Other",
            "slug" => "religion",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);
    }
}
