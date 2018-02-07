<?php

use Carbon\Carbon;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(\App\User::class, function (Faker $faker) {
    return [
        'fname' => $faker->firstName,
        'lname' => $faker->lastName,
        'username' => $faker->userName,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt("password"), // password
        'remember_token' => str_random(10),
        'active' => $faker->randomElement([false,true]),
        'gender' => $faker->randomElement(["m" , "f"]),
        'registered_at' => $faker->dateTimeBetween('-2 years' , 'now')
    ];
});
