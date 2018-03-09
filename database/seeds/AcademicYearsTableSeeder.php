<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AcademicYearsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("academic_years")->insert([
            "year" => 2018,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);
    }
}
