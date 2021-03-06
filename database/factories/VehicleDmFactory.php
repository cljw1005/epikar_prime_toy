<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Vehicle\VehicleDm;
use Faker\Generator as Faker;

$factory->define(VehicleDm::class, function (Faker $faker) {
    return [
    	'dealer_group_code' => $faker->randomNumber(2, true),
        'num_serial' => $faker->unique(100000)->randomNumber(8, true),
		'num_id' => $faker->unique(100000)->randomNumber(8, true),
    ];
});
