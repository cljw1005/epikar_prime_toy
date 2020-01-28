<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Care\CareDm;
use Faker\Generator as Faker;

$factory->define(CareDm::class, function (Faker $faker) {
    return [
		'dealer_group_code' => $faker->randomNumber(2, true),
        'sn' => $faker->unique(100000)->randomNumber(8, true),
		'vin' => \App\Models\Vehicle\VehicleDm::inRandomOrder()->first()->vin,
    ];
});
