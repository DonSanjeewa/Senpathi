<?php

use Faker\Generator as Faker;

$factory->define(\App\Teacher::class, function (Faker $faker) {
    return [
        //TODO implement faker for other values
        'name' => $faker->name,
        'grade' => $faker->realText($faker->numberBetween(1,12)),
        'contact' => $faker->phoneNumber
    ];
});
