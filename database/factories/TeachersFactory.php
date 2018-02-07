<?php

use Faker\Generator as Faker;

$factory->define(\App\Teacher::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween($min = 1, $max = 20),
        'signature_no' => $faker->numberBetween($min = 1000, $max = 10000),
        'serial_no' => $faker->numberBetween($min = 1000, $max = 10000),
        'personal_file_no' => $faker->numberBetween($min = 1000, $max = 10000),
        'full_name' => $faker->name,
        'name_with_initials' => $faker->name,
        'gender' => $faker->randomElement(["m", "f"]),
        'section' => $faker->numberBetween($min = 1, $max = 20),
        'nic_no' => str_random(10),
        'permanent_addr' => str_random(10),
        'wnop_no' => str_random(5),
        'service' => $faker->numberBetween($min = 1, $max = 20),
        'grade' => $faker->numberBetween($min = 1, $max = 12),
        'main_subject_id' => $faker->numberBetween($min = 1, $max = 12),
        'medium' => $faker->randomElement(["Sinhala", "English", "Tamil"]),
        'contact_mobile' => $faker->phoneNumber,
        'contact_home' => $faker->phoneNumber,
        'dob' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'remarks' => str_random(5),
        'civil_status' => $faker->randomElement(["Married", "Unmarried"]),
        'photo_file_name' => str_random(5),
        'religion_id' => $faker->numberBetween($min = 1, $max = 20),
        'photo_content_type' => $faker->randomElement(["A", "B"]),
        'photo_data' => $faker->randomElement(["A", "B"]),
        'wnop_no' => str_random(5),
        'nationality_id' => str_random(10),
        'designation_id' => str_random(10),
        'educational_qualific' => str_random(10),
        'professional_qualific' => str_random(10),
        'promotions' => str_random(10),
        'increment_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'duty_assume_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'pension_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'pension_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'joined_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
    ];
});
