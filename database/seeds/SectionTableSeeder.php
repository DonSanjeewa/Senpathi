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
            "name" => "1 - 5",
            "slug" => "1_to_5",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("sections")->insert([
            "name" => "6/7",
            "slug" => "6_&_7",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("sections")->insert([
            "name" => "8/9",
            "slug" => "8_&_9",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("sections")->insert([
            "name" => "10/11",
            "slug" => "10_&_11",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("sections")->insert([
            "name" => "A/L Science",
            "slug" => "al_science",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("sections")->insert([
            "name" => "A/L Commerce",
            "slug" => "al_commerce",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("sections")->insert([
            "name" => "A/L Arts",
            "slug" => "al_arts",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);



        DB::table("service_grades")->insert([
            "name" => "Sri Lanka Education Administrative Service - I",
            "slug" => "sri_lanka_education_administrative_service_1",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("service_grades")->insert([
            "name" => "Sri Lanka Education Administrative Service - II",
            "slug" => "sri_lanka_education_administrative_service_2",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("service_grades")->insert([
            "name" => "Sri Lanka Education Administrative Service - III",
            "slug" => "sri_lanka_education_administrative_service_3",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("service_grades")->insert([
            "name" => "Sri Lanka Principal Service - I",
            "slug" => "sri_lanka_principal_service_1",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("service_grades")->insert([
            "name" => "Sri Lanka Principal Service - II",
            "slug" => "sri_lanka_principal_service_1",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("service_grades")->insert([
            "name" => "Sri Lanka Principal Service - III",
            "slug" => "sri_lanka_principal_service_3",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("service_grades")->insert([
            "name" => "Sri Lanka Teacher Service - I",
            "slug" => "sri_lanka_teacher_service_1",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("service_grades")->insert([
            "name" => "Sri Lanka Teacher Service - II",
            "slug" => "sri_lanka_teacher_service_2",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("service_grades")->insert([
            "name" => "Sri Lanka Teacher Service - III",
            "slug" => "sri_lanka_teacher_service_3",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("service_grades")->insert([
            "name" => "Other",
            "slug" => "other",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);
    }
}
