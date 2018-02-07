<?php

use Illuminate\Database\Seeder;

class UserSalaryRequestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\UserSalaryRequest::class, 10)->create();
    }
}
