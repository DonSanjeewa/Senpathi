<?php

use Illuminate\Database\Seeder;

class TeacherSubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\TeacherSubject::class, 10)->create();
    }
}
