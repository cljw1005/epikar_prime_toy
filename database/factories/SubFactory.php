<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Sub\Sub;
use Faker\Generator as Faker;

$factory->define(Sub::class, function (Faker $faker) {

	$ids = Sub::get()->pluck('vehicle_id')->toArray();

    return [
		//'vehicle_id' => \App\Models\Vehicle\Vehicle::whereNotIn('id', $ids)->inRandomOrder()->first()->id,
		'vehicle_vin' => \App\Models\Vehicle\Vehicle::whereNotIn('id', $ids)->inRandomOrder()->first()->vin,
		'pkg_id' => \App\Models\Pkg\Pkg::inRandomOrder()->first()->id,
		'title' => $faker->sentence,
		'content' => $faker->paragraph,
    ];
});
