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
            "name" => "Buddhism",
            "code" => "001",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("subjects")->insert([
            "name" => "Islam",
            "code" => "002",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("subjects")->insert([
            "name" => "Sinhala Language",
            "code" => "003",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("subjects")->insert([
            "name" => "English Language",
            "code" => "004",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("subjects")->insert([
            "name" => "Mathematics",
            "code" => "005",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("subjects")->insert([
            "name" => "Mathematics- English",
            "code" => "006",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("subjects")->insert([
            "name" => "Science",
            "code" => "007",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("subjects")->insert([
            "name" => "Science- English",
            "code" => "008",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("subjects")->insert([
            "name" => "History",
            "code" => "009",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("subjects")->insert([
            "name" => "Business & Accounting Studies",
            "code" => "010",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);
        
        DB::table("subjects")->insert([
            "name" => "Geography",
            "code" => "011",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("subjects")->insert([
            "name" => "Music",
            "code" => "012",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("subjects")->insert([
            "name" => "Art",
            "code" => "013",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("subjects")->insert([
            "name" => "Dancing",
            "code" => "014",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("subjects")->insert([
            "name" => "Information & communication",
            "code" => "015",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);
        
        DB::table("subjects")->insert([
            "name" => "Technology",
            "code" => "016",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("subjects")->insert([
            "name" => "Agriculture & Food Technology",
            "code" => "017",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("subjects")->insert([
            "name" => "Health & Physical Education",
            "code" => "018",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        /////////////////////////////////////AL

        DB::table("subjects")->insert([
            "name" => "Biology ( A/L)",
            "code" => "019",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("subjects")->insert([
            "name" => "Chemistry ( A/L)",
            "code" => "020",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("subjects")->insert([
            "name" => "Physics ( A/L)",
            "code" => "021",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("subjects")->insert([
            "name" => "Combined Mathematics ( A/L)",
            "code" => "022",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("subjects")->insert([
            "name" => "Economics ( A/L)",
            "code" => "023",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("subjects")->insert([
            "name" => "Accounting ( A/L)",
            "code" => "024",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);
        
        DB::table("subjects")->insert([
            "name" => "Business studies ( A/L)",
            "code" => "025",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);
    }
}
