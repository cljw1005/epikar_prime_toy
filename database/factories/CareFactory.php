<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Care\Care;
use Faker\Generator as Faker;

$factory->define(Care::class, function (Faker $faker) {
    return [
		//'vehicle_id' => \App\Models\Vehicle\Vehicle::inRandomOrder()->first()->id,
		'vehicle_num_id' => \App\Models\Vehicle\Vehicle::inRandomOrder()->first()->num_id,
		'title' => $faker->sentence,
		'content' => $faker->paragraph,
    ];
});
