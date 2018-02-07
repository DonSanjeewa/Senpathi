<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class NationalitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("nationalities")->insert([
            "name" => "Sinhala",
            "slug" => "nationality",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);


        DB::table("nationalities")->insert([
            "name" => "Sri Lankan Tamil",
            "slug" => "nationality",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("nationalities")->insert([
            "name" => "Indian Tamil",
            "slug" => "nationality",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("nationalities")->insert([
            "name" => "Muslim",
            "slug" => "nationality",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("nationalities")->insert([
            "name" => "Other",
            "slug" => "nationality",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);
    }
}
