<?php

use Faker\Generator as Faker;

$factory->define(\App\Period::class, function (Faker $faker) {
    return [
        'day' => $faker->randomElement(['Monday','Tuesday','Wensday','Thursday','Friday']),
        'time_slot' => $faker->time($format = 'H:i:s', $max = 'now')
    ];
});
