<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'grade' => $faker->realText($faker->numberBetween(1,12)),
        'contact' => $faker->phoneNumber

    ];
});
