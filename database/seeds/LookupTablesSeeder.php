<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class LookupTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("academic_roles")->insert([
            "name" => "Subject Teacher",
            "slug" => "",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("academic_roles")->insert([
            "name" => "Sectional Head",
            "slug" => "",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("academic_roles")->insert([
            "name" => "Subject Coordinator",
            "slug" => "",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("academic_roles")->insert([
            "name" => "Master in Charge",
            "slug" => "",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("academic_roles")->insert([
            "name" => "Class Teacher",
            "slug" => "",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("academic_roles")->insert([
            "name" => "Discipline Master",
            "slug" => "",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("academic_roles")->insert([
            "name" => "POG",
            "slug" => "",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("academic_roles")->insert([
            "name" => "Assistant POG",
            "slug" => "",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("academic_roles")->insert([
            "name" => "Other",
            "slug" => "",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);




        DB::table("nationalities")->insert([
            "name" => "Sinhala",
            "slug" => "sinhala",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);


        DB::table("nationalities")->insert([
            "name" => "Sri Lankan Tamil",
            "slug" => "sri_lankan_tamil",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("nationalities")->insert([
            "name" => "Indian Tamil",
            "slug" => "indian_tamil",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("nationalities")->insert([
            "name" => "Muslim",
            "slug" => "muslim",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("nationalities")->insert([
            "name" => "Other",
            "slug" => "other",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);


        DB::table("religions")->insert([
            "name" => "Buddhism",
            "slug" => "buddhism",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("religions")->insert([
            "name" => "Hinduism",
            "slug" => "hinduism",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("religions")->insert([
            "name" => "Islam",
            "slug" => "islam",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("religions")->insert([
            "name" => "Catholicism",
            "slug" => "catholicism",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("religions")->insert([
            "name" => "Christianity",
            "slug" => "christianity",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("religions")->insert([
            "name" => "Other",
            "slug" => "other",
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



        DB::table("designations")->insert([
            "name" => "Principal",
            "slug" => "principal",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("designations")->insert([
            "name" => "Deputy Principal",
            "slug" => "deputy_Principal",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);


    }
}
