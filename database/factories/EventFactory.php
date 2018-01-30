<?php

use Faker\Generator as Faker;

$factory->define(\App\Event::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'location' => $faker->streetName,
        'description' => $faker->text(100),
        'starts_at' => $faker->dateTimeBetween('now','2 months'),
        'ends_at' => $faker->dateTimeBetween('2 months','2 years'),
        'user_id' => 1
    ];
});
