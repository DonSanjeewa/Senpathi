<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ServiceGradesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("service_grades")->insert([
            "name" => "Sri Lanka Education Administrative Service - I",
            "slug" => "service_grades",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("service_grades")->insert([
            "name" => "Sri Lanka Education Administrative Servicel - II",
            "slug" => "service_grades",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("service_grades")->insert([
            "name" => "Sri Lanka Education Administrative Servicel - III",
            "slug" => "service_grades",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("service_grades")->insert([
            "name" => "Sri Lanka Principal Service - I",
            "slug" => "service_grades",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("service_grades")->insert([
            "name" => "Sri Lanka Principal Service - 2I",
            "slug" => "service_grades",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("service_grades")->insert([
            "name" => "Sri Lanka Principal Service - 2II",
            "slug" => "service_grades",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("service_grades")->insert([
            "name" => "Sri Lanka Principal Service - 3",
            "slug" => "service_grades",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("service_grades")->insert([
            "name" => "Sri Lanka Teacher Service - I",
            "slug" => "service_grades",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("service_grades")->insert([
            "name" => "Sri Lanka Principal Service - 2I",
            "slug" => "service_grades",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("service_grades")->insert([
            "name" => "Sri Lanka Principal Service - 2II",
            "slug" => "service_grades",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("service_grades")->insert([
            "name" => "Sri Lanka Principal Service - 3I",
            "slug" => "service_grades",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("service_grades")->insert([
            "name" => "Sri Lanka Principal Service - 3II",
            "slug" => "service_grades",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("service_grades")->insert([
            "name" => "Sri Lanka Principal Service - 3II",
            "slug" => "service_grades",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("service_grades")->insert([
            "name" => "Sri Lanka Principal Service Pending",
            "slug" => "service_grades",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

    }
}
