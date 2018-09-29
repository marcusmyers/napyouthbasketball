<?php

use Faker\Generator as Faker;

$factory->define(App\Game::class, function (Faker $faker) {
    return [
    	'game_time' => $faker->dateTime('now'),
    	'season_id' => $faker->randomDigit,
    	'location_id' => $faker->randomDigit,
    ];
});
