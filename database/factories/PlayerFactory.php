<?php

use Faker\Generator as Faker;

$factory->define(App\Player::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'address' => $faker->address,
        'phone' => $faker->phoneNumber,
        'alt_phone' => $faker->phoneNumber,
        'email' => $faker->email,
        'grade' => $faker->numberBetween(3, 6),
        'parents_names' => $faker->name,
        'paid' => $faker->boolean(50),
        'height' => $faker->randomNumber,
        'weight' => $faker->randomNumber,
        'shirt_size' => $faker->randomElement(['S','M','L','XL']),
        'signed_waiver' => $faker->boolean(50),
        'willing_to_coach' => $faker->boolean(50),
    ];
});
