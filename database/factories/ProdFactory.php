<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Prod\Prod;
use Faker\Generator as Faker;

$factory->define(Prod::class, function (Faker $faker) {
    return [
		'title' => $faker->sentence,
		'content' => $faker->paragraph,
    ];
});
