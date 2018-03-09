<?php

use Faker\Generator as Faker;

$factory->define(\App\SalaryRequest::class, function (Faker $faker) {
    return [
        ('consolidated_salary') => $faker->numberBetween($min = 10000, $max = 40000),
        ('cost_of_living_allowance') => $faker->numberBetween($min = 10000, $max = 40000),
        ('arrears_of_salaries') => $faker->numberBetween($min = 10000, $max = 40000),
        ('principal_allowances') => $faker->numberBetween($min = 10000, $max = 40000),
        ('other_offers') => $faker->numberBetween($min = 10000, $max = 40000),
        ('festival_advance') => $faker->numberBetween($min = 10000, $max = 40000),
        ('widow_widower') => $faker->numberBetween($min = 10000, $max = 40000),
        ('co_operative_development_cost') => $faker->numberBetween($min = 10000, $max = 40000),
        ('festival_cost') => $faker->numberBetween($min = 10000, $max = 40000),
        ('special_advance') => $faker->numberBetween($min = 10000, $max = 40000),
        ('distress_loan_installment') => $faker->numberBetween($min = 10000, $max = 40000),
        ('insurance_premium') => $faker->numberBetween($min = 10000, $max = 40000),
        ('property_loan') => $faker->numberBetween($min = 10000, $max = 40000),
        ('houses_rent') => $faker->numberBetween($min = 10000, $max = 40000),
        ('electricity_bills') => $faker->numberBetween($min = 10000, $max = 40000),
        ('stamp_duty') => $faker->numberBetween($min = 10000, $max = 40000),
        ('government_bonds_association') => $faker->numberBetween($min = 10000, $max = 40000),
        ('premium_rate_of_public_servants') => $faker->numberBetween($min = 10000, $max = 40000),
        ('user_id') => $faker->numberBetween($min = 1, $max = 10),
    ];
});
