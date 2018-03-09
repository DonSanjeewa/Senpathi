<?php

use Illuminate\Database\Seeder;

class SalaryRequestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\SalaryRequest::class, 10)->create();
    }
}
