<?php

use Faker\Generator as Faker;

$factory->define(\App\TeacherSubject::class, function (Faker $faker) {
    return [
        'teacher_id' => $faker->numberBetween($min = 1, $max = 100),
        'subject_id' => $faker->numberBetween($min = 1, $max = 100),
        'default_subject' => $faker->randomElement(["0","1"])
    ];
});

