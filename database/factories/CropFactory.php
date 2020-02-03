<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Models\Crop\Crop;
use Faker\Generator as Faker;

$factory->define(Crop::class, function (Faker $faker) {
    return [
        'dealer_group_code' => $faker->unique(100000)->randomNumber(8),
        'corp_num_serial' => $faker->paragraph,
        'corp_name' => $faker->paragraph,
    ];
});
