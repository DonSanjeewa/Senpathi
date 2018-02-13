<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //  factory(App\Teacher::class, 50)->create();

        DB::table("teachers")->insert([
            "user_id" => "1",
            "name_initials" => "A.B Lisa Ann",
            "full_name" => "Lisa Ann",
            "nic" => "9319923344V",
            "dob" => "1993-09-19",
            "address" => "Malabe",
            "contact_mobile" => "0771212132",
            "contact_home" => "0771212132",
            "civil_status" => "Married",
            "nationality_id" => 1,
            "religion_id" => 1,
            "widow_and_orphan_no" => "2",
            "salary_compute_no" => 2,
            "signature_no" => 5,
            "gov_reg_no" => 123,
            "personal_file_no" => 1234,
            "designation_id" => 1,
            "section_id" => 1,
            "medium" => "Sinhala",
            "main_subject_id" => 1,
            "joined_at" => Carbon::now(),
            "service_grade_id" => 1,
            "nature_of_appointment" => "ABC",
            "current_role" => "Test",
            "current_type" => "Test",
            "salary" => 28000,
            "first_appointment_at" => Carbon::now(),
        ]);

        DB::table("teachers")->insert([
            "user_id" => "2",
            "name_initials" => "C.A. Dextor",
            "full_name" => "Cherm Dextor",
            "nic" => "9319923344V",
            "dob" => "1993-09-19",
            "address" => "Malabe",
            "contact_mobile" => "0771212132",
            "contact_home" =>"0771212132",
            "civil_status" => "Married",
            "nationality_id" => 2,
            "religion_id" => 2,
            "widow_and_orphan_no" => 1,
            "salary_compute_no" => 2,
            "signature_no" => 2,
            "gov_reg_no" => 2,
            "personal_file_no" => 2,
            "designation_id" => 2,
            "section_id" => 2,
            "medium" => "English",
            "main_subject_id" => 2,
            "joined_at" => Carbon::now(),
            "service_grade_id" => 2,
            "nature_of_appointment" => "Test",
            "current_role" => "Test",
            "current_type" => "Test",
            "salary" => 25000,
            "first_appointment_at" => Carbon::now(),
        ]);

        DB::table("teachers")->insert([
            "user_id" => "3",
            "name_initials" => "R.R Rolwing",
            "full_name" => "Rowing Rolwing",
            "nic" => "*",
            "dob" => "1993-09-19",
            "address" => Carbon::now(),
            "contact_mobile" => "0771212132",
            "contact_home" => "0771212132",
            "civil_status" => "Married",
            "nationality_id" => 3,
            "religion_id" => 3,
            "widow_and_orphan_no" => 3,
            "salary_compute_no" => 3,
            "signature_no" => 3,
            "gov_reg_no" => 3,
            "personal_file_no" => 3,
            "designation_id" => 3,
            "section_id" => 3,
            "medium" => "Tamil",
            "main_subject_id" => 3,
            "joined_at" => Carbon::now(),
            "service_grade_id" => 3,
            "nature_of_appointment" => "Test",
            "current_role" => "Test",
            "current_type" => "Test",
            "salary" => 30000,
            "first_appointment_at" => Carbon::now(),
        ]);


    }
}
