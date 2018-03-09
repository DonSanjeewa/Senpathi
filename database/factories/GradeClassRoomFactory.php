<?php

use Faker\Generator as Faker;

$factory->define(\App\GradeClassRoom::class, function (Faker $faker) {
    return [
        'grade_id' => $faker->numberBetween($min = 1, $max = 10),
        'class_id' => $faker->numberBetween($min = 1, $max = 10)
    ];
});
