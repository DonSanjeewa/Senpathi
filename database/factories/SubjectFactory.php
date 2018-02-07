<?php

use Faker\Generator as Faker;

$factory->define(\App\Subject::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName,
        'code' => str_random(4)
    ];
});
