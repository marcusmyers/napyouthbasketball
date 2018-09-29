<?php

use Faker\Generator as Faker;

$factory->define(App\Location::class, function (Faker $faker) {
    return [
        'building' => $faker->name,
        'court' => 'Court '. $faker->randomDigit,
    ];
});
