<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Vehicle\Vehicle;
use Faker\Generator as Faker;

$factory->define(Vehicle::class, function (Faker $faker) {
    return [
		'num_id' => $faker->unique(100000)->randomNumber(8),
		'user_id' => \App\User::inRandomOrder()->first()->id,
		'title' => $faker->sentence,
		'content' => $faker->paragraph,
    ];
});
