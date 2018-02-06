<?php

use Illuminate\Database\Seeder;

class ClassRoomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ClassRoom::class, 10)->create();
    }
}
