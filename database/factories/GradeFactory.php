<?php

use Faker\Generator as Faker;

$factory->define(\App\Grade::class, function (Faker $faker) {
    return [
        'name' => $faker->numberBetween($min = 1, $max = 13)
    ];
});
