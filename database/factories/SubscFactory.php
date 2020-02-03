<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Subsc\Subsc;
use Faker\Generator as Faker;

$factory->define(Subsc::class, function (Faker $faker) {

	$ids = Subsc::get()->pluck('vehicle_id')->toArray();

    return [
		//'vehicle_id' => \App\Models\Vehicle\Vehicle::whereNotIn('id', $ids)->inRandomOrder()->first()->id,
		'vehicle_num_id' => \App\Models\Vehicle\Vehicle::whereNotIn('id', $ids)->inRandomOrder()->first()->num_id,
		'pkg_id' => \App\Models\Pkg\Pkg::inRandomOrder()->first()->id,
		'title' => $faker->sentence,
		'content' => $faker->paragraph,
    ];
});
