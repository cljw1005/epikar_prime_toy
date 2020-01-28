<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Vehicle\Vehicle;
use Faker\Generator as Faker;

$factory->define(Vehicle::class, function (Faker $faker) {
    return [
		'vin' => $faker->unique(100000)->randomNumber(8),
		'title' => $faker->sentence,
		'content' => $faker->paragraph,
    ];
});
