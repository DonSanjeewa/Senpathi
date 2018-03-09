<?php

use Illuminate\Database\Seeder;

class GradeClassRoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\GradeClassRoom::class, 10)->create();
    }
}
