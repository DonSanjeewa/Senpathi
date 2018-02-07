<?php

use Faker\Generator as Faker;

$factory->define(\App\TimeTable::class, function (Faker $faker) {
    return [
        'teacher_id' => $faker->numberBetween($min = 1, $max = 50),
        'subject_id' => $faker->numberBetween($min = 1, $max = 50),
        'period_id' => $faker->numberBetween($min = 1, $max = 50),
        'grade_id' => $faker->numberBetween($min = 1, $max = 50),
        'class_id' => $faker->numberBetween($min = 1, $max = 50),
        'academic_year' => $faker->numberBetween($min = 1, $max = 12)
    ];
});
