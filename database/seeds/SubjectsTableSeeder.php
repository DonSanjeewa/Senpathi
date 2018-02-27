<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("subjects")->insert([
            "name" => "Sinhala",
            "code" => "001",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("subjects")->insert([
            "name" => "English",
            "code" => "001",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("subjects")->insert([
            "name" => "Tamil",
            "code" => "001",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("subjects")->insert([
            "name" => "Mathematics",
            "code" => "001",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("subjects")->insert([
            "name" => "Science",
            "code" => "001",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("subjects")->insert([
            "name" => "Geography",
            "code" => "001",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("subjects")->insert([
            "name" => "History",
            "code" => "001",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("subjects")->insert([
            "name" => "Helth Science",
            "code" => "001",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("subjects")->insert([
            "name" => "Music",
            "code" => "001",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("subjects")->insert([
            "name" => "Arts",
            "code" => "001",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);
        
        DB::table("subjects")->insert([
            "name" => "Dancing",
            "code" => "001",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("subjects")->insert([
            "name" => "Biology ( A/L )",
            "code" => "001",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("subjects")->insert([
            "name" => "Mathematics ( A/L )",
            "code" => "001",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);
        
        
    }
}
