<?php

use Faker\Generator as Faker;

$factory->define(\App\UserSalaryRequest::class, function (Faker $faker) {
    return [
        'user_id' => function (){
            return factory(App\User::class)->create()->id;
        },
        'salary_request_id' => $faker->numberBetween($min = 1, $max = 20),
        'next_approval' => $faker->userName,
        'status' => $faker->randomElement(["1","0"])
    ];
});
