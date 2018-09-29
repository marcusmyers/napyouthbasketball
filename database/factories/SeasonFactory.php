<?php

use Faker\Generator as Faker;

$factory->define(App\Season::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});

$factory->state(App\Season::class, 'active', [
	'active' => 1,
]);

$factory->state(App\Season::class, 'not_active', [
	'active' => 0,
]);
