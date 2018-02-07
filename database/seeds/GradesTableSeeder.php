<?php

use Illuminate\Database\Seeder;

class GradesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 14; $i++) {
            $grade = \App\Grade::create([
                'name' => $i
            ]);
            foreach (range('A', 'H') as $j) {
                \App\ClassRoom::create([
                    'name' => $j,
                    'grade_id' => $grade->id
                ]);
            }
        }
    }
}
